export default {
  data() {
    return {
      loaded: false,
      readyPromises: [],
    };
  },
  methods: {
    /**
     * @param apiKey    API Key, or object with the URL parameters. For example
     *                  to use Google Maps Premium API, pass `{ client: <YOUR-CLIENT-ID> }`.
     *                  You may pass the libraries and/or version (as `v`) parameter into
     *                  this parameter and skip the next two parameters
     * @param version   Google for Maps version
     * @param libraries Libraries to load
     *                  (@see https://developers.google.com/maps/documentation/javascript/libraries)
     */
    async loadGoogleMaps(apiKey, version, libraries) {
      if (!this.loaded && (!window.google || !window.google.maps)) {
        const googleMapScript = document.createElement("SCRIPT");

        // Allow apiKey to be an object.
        // This is to support more esoteric means of loading Google Maps,
        // such as Google for business
        // https://developers.google.com/maps/documentation/javascript/get-api-key#premium-auth
        let options = {};

        if (typeof apiKey === "string") {
          options.key = apiKey;
        } else if (typeof apiKey === "object") {
          options = apiKey;
        } else {
          throw new Error("`apiKey` should either be a string or an object");
        }

        if (libraries && libraries.length > 0) {
          options.libraries = libraries.join(",");
        }

        options.callback = "VueGoogleMapsLoaded";

        let url = `https://maps.googleapis.com/maps/api/js?${Object.keys(
          options,
        )
          .map((key) => {
            return `${encodeURIComponent(key)}=${encodeURIComponent(
              options[key],
            )}`;
          })
          .join("&")}`;

        if (version) {
          url = `${url}&v=${version}`;
        }

        googleMapScript.setAttribute("src", url);
        googleMapScript.setAttribute("async", "");
        googleMapScript.setAttribute("defer", "");
        document.body.appendChild(googleMapScript);

        window.VueGoogleMapsLoaded = this._setLoaded.bind(this);
      } else {
        console.warn("The Google Maps library is already loaded");
        this._setLoaded();
      }

      return await this.ensureReady();
    },

    ensureReady() {
      if (this.loaded) {
        return Promise.resolve();
      } else {
        return new Promise((resolve) => {
          this.readyPromises.push(resolve);
        });
      }
    },

    _setLoaded() {
      this.loaded = true;
      for (const resolve of this.readyPromises) {
        resolve();
      }
      this.readyPromises = [];
    },
  },
};
