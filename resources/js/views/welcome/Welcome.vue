<template>
  <div id="content">
    <header class="header">
      <div class="gradient">
        <div class="gradient-box gradient-box-lightest"></div>
        <div class="gradient-box gradient-box-light"></div>
        <div class="gradient-box gradient-box-dark"></div>
        <div class="gradient-box gradient-box-darkest"></div>
      </div>

      <div class="header--img"></div>
      <h1 class="primary">
        <span>C</span><span class="left-o">o</span><span class="left-m">m</span
        ><span class="left-e">e</span> <span>C</span
        ><span class="left-e">e</span><span>l</span><span class="left-e">e</span
        ><span>b</span><span>r</span><span>a</span><span class="left-t">t</span
        ><span class="left-e">e</span><span class="left-ex">!</span>
      </h1>
      <h4 class="secondary">We're getting married!</h4>
    </header>

    <section class="section info">
      <div class="section--content">
        <h1 class="secondary">Join Us:</h1>
        <h2>September 14, 2019</h2>
        <div class="text-uppercase">Syracuse, IN</div>
      </div>
    </section>

    <div class="photos">
      <div class="gradient">
        <div class="gradient-box gradient-box-lightest"></div>
        <div class="gradient-box gradient-box-light"></div>
        <div class="gradient-box gradient-box-dark"></div>
        <div class="gradient-box gradient-box-darkest"></div>
      </div>

      <div class="photos--grid">
        <div class="photos--item">
          <img src="../../../img/engagement_1.jpg" />
        </div>
        <div class="photos--item">
          <img src="../../../img/engagement_2.jpg" />
        </div>
        <div class="photos--item">
          <img src="../../../img/engagement_3.jpg" />
        </div>
        <div class="photos--item">
          <img src="../../../img/engagement_4.jpg" />
        </div>
        <div class="photos--item">
          <img src="../../../img/engagement_5.jpg" />
        </div>
        <div class="photos--item">
          <img src="../../../img/engagement_6.jpg" />
        </div>
        <div class="photos--item">
          <img src="../../../img/engagement_7.jpg" />
        </div>
        <div class="photos--item">
          <img src="../../../img/engagement_8.jpg" />
        </div>
      </div>
    </div>

    <section id="Our-Wedding" class="section wedding">
      <div class="section--content">
        <h1 class="secondary">Our Wedding</h1>

        <h3 class="primary" style="margin-bottom: -35px; margin-top: 40px;">
          Oakwood Re<span class="left-s">s</span>or<span class="left-t">t</span>
        </h3>
        <p>
          702 E. Lake View Rd <br />
          Syracuse, IN 46567
        </p>
        <h4>September 14, 2019</h4>
        <h3>4:30 PM</h3>
      </div>
    </section>

    <section class="section rsvp">
      <div class="section--content">
        <div class="callout">
          <h3>We hope you can make it!</h3>
          <router-link
            class="btn btn-large"
            :to="{
              name: 'RSVP',
            }"
            >RSVP</router-link
          >
        </div>
      </div>
    </section>
    <section id="Travel" class="section section-large travel">
      <div class="section--content">
        <h1 class="secondary">
          <span class="heading-small">Travel & Accommodations</span>
        </h1>

        <div class="travel-split">
          <div class="travel--img">
            <img src="../../../img/oakwood2.jpg" />
            <div class="travel--img-text">
              <h3 class="primary" style="margin-bottom: -35px;">
                Oakwood Re<span class="left-s">s</span>or<span class="left-t"
                  >t</span
                >
              </h3>
              <p>
                702 E. Lake View Rd <br />
                Syracuse, IN 46567 <br />
              </p>
              <p>
                <a href="tel:1-574-457-7100" class="a-inverse"
                  >(574) 457-7100</a
                >
                <br />
                <a
                  href="http://oakwoodresort.com"
                  target="blank"
                  class="a-inverse"
                  >oakwoodresort.com</a
                >
              </p>
            </div>
          </div>

          <div class="travel--text">
            <p>
              We have reserved a block of rooms at The Oakwood Resort. Wedding
              guests will receive a discounted rate. Please call and reference
              the Falotico / Policinski wedding when making your reservations.
              We recommend booking early, as we expect rooms to fill up quickly.
            </p>

            <h3>Things to Do</h3>
            <p>find things</p>
          </div>
        </div>
      </div>
    </section>

    <section class="section map">
      <div class="section--full">
        <div class="gradient">
          <div class="gradient-box gradient-box-lightest"></div>
          <div class="gradient-box gradient-box-light"></div>
          <div class="gradient-box gradient-box-dark"></div>
          <div class="gradient-box gradient-box-darkest"></div>
        </div>
        <div class="callout">
          <div class="map-container" ref="mapContainer"></div>
        </div>
      </div>
    </section>

    <section id="Registry" class="section registry">
      <div class="section--content">
        <h1 class="secondary">Registry</h1>
        <div class="registry--list">
          <a
            class="registry--item"
            href="https://www.crateandbarrel.com/gift-registry/janice-falotico-and-luke-policinski/r5866760"
            target="_blank"
          >
            <svg
              id="svg-icon-logo-cb-large"
              viewBox="0 0 219 32"
              width="100%"
              height="100%"
            >
              <title>Crate and Barrel</title>
              <path
                fill="currentColor"
                d="M25.12 14c-0.48-2.96-3.68-8-9.76-8-5.44 0.080-9.76 4.4-9.76 10.32 0 5.36 4.48 10 9.84 10 5.92 0 8.96-5.040 9.44-6.72h5.6c-0.96 5.12-6.16 12.4-14.96 12.4-8.72 0-15.52-7.2-15.52-15.84 0-8.56 6.8-15.84 15.36-15.84 8.4 0 14.56 6.64 15.36 13.68h-5.6z"
              ></path>
              <path
                fill="currentColor"
                d="M42.48 13.92c-2.96 0-5.44 2.24-5.44 5.44v12h-5.6v-21.84h5.36l0.24 2.24h0.080c1.68-2 3.44-2.8 5.12-2.8 0.64 0 1.2 0.080 1.36 0.24v4.72c-0.4 0.080-0.56 0-1.12 0z"
              ></path>
              <path
                fill="currentColor"
                d="M62.080 27.040v-10.56c0-5.28-3.52-7.68-9.36-7.68-2.56 0-4.48 0.56-6 1.6-1.76 1.12-2.64 3.040-2.88 5.6h4.88c0.16-0.8 0.4-1.68 1.040-2.16 0.72-0.56 1.84-0.96 2.96-0.96 2 0 3.84 1.040 3.84 2.72 0 2.48-3.040 1.84-6.48 2.56-3.68 0.64-7.68 2.64-7.68 7.040 0 4.16 4 6.8 7.92 6.8 2.56 0 4.4-0.64 6.64-2.56 0.080 0.72 0.16 1.2 0.32 1.92h5.6c-0.72-1.28-0.8-2.8-0.8-4.32zM56.8 22.16c0 1.52-0.080 3.2-1.040 4-0.96 0.88-2.24 1.44-4.080 1.44-3.36 0-3.68-2.16-3.68-2.72 0-0.48 0.32-1.68 1.2-2.24 0.96-0.64 2.4-1.040 4.4-1.52 1.68-0.4 2.64-0.64 3.2-0.96v2z"
              ></path>
              <path
                fill="currentColor"
                d="M70.56 31.44h-0.16c-4.4 0-5.36-2.72-5.36-5.28v-12.8h-2.88v-3.76h2.88v-7.36h5.52v7.28h3.92v3.76h-3.92v10.96c0 2 0.56 2.8 2.48 2.8h1.68v4.24c-3.12 0.16-4.16 0.16-4.16 0.16z"
              ></path>
              <path
                fill="currentColor"
                d="M84.4 27.2c-2.72 0-5.12-2.16-5.12-4.96v-0.32h15.52c0-7.44-4-13.12-10.72-13.12s-10.64 5.76-10.64 11.36c0 5.92 3.92 11.84 11.2 11.84 7.6 0 9.92-6.48 9.92-7.44h-5.76c-0.8 1.52-2.32 2.64-4.4 2.64zM84 13.36c2.64 0 4.64 1.84 4.64 4.56h-9.36c0-1.84 1.44-4.56 4.72-4.56z"
              ></path>
              <path
                fill="currentColor"
                d="M116.32 24.72c2.080-2.64 3.040-6.32 3.28-8.8h-4.8c0 0.32-1.6 4.72-1.6 4.72-1.2-1.6-2.48-3.28-3.76-5.040 1.76-1.2 4.88-3.36 4.88-7.44 0-4.32-3.6-7.2-7.68-7.2-4.64 0-7.36 3.68-7.36 6.72 0 3.52 2.8 6.32 3.12 6.8-2.88 1.28-7.040 4.16-7.040 9.44 0 3.6 2.96 8.16 8.88 8.16 3.68 0 6.72-1.6 8.64-3.36 0 0 1.2 1.6 2 2.72h4.48c1.84 0 1.84 0 1.84 0-1.84-2.64-3.36-4.72-4.88-6.72zM106.8 5.44c1.28 0 2.72 1.040 2.72 2.64 0 1.52-1.52 2.88-2.88 4-1.2-1.6-2.4-2.88-2.4-4.32 0-1.2 1.2-2.32 2.56-2.32zM104.24 27.2c-1.84 0-3.36-1.6-3.36-3.52 0-1.12 0.56-2.32 1.76-3.36 0.96-0.88 1.76-1.36 2.56-1.92 0.8 1.040 2.72 3.68 4.72 6.32-1.2 0.88-2.96 2.48-5.68 2.48z"
              ></path>
              <path
                fill="currentColor"
                d="M139.44 15.44c0.32-0.24 4.56-1.44 4.56-6.32 0-3.12-1.52-7.52-10.16-7.52h-12.16v29.76h15.6c3.36 0 7.84-2.96 7.84-7.92 0-6.4-5.36-7.84-5.68-8zM127.28 6.24h6.48c3.36 0 4.64 1.76 4.64 3.6 0 2.88-2.64 3.76-4.64 3.76h-6.48v-7.36zM133.76 26.72h-6.48v-8.72h6.56c4.64 0 5.2 2.72 5.2 4.32 0 3.040-2.4 4.4-5.28 4.4z"
              ></path>
              <path
                fill="currentColor"
                d="M165.28 27.040v-10.56c0-5.28-3.52-7.68-9.36-7.68-2.56 0-4.48 0.56-6 1.6-1.76 1.12-2.64 3.040-2.88 5.6h4.88c0.16-0.8 0.4-1.68 1.040-2.16 0.72-0.56 1.84-0.96 2.96-0.96 2 0 3.84 1.040 3.84 2.72 0 2.48-3.040 1.84-6.48 2.56-3.76 0.8-7.68 2.72-7.68 7.12 0 4.16 4 6.8 7.92 6.8 2.56 0 4.4-0.64 6.64-2.56 0.080 0.72 0.16 1.2 0.32 1.92h5.6c-0.72-1.36-0.8-2.88-0.8-4.4zM160 22.16c0 1.52-0.080 3.2-1.040 4-0.96 0.88-2.24 1.44-4.080 1.44-3.36 0-3.68-2.16-3.68-2.72 0-0.48 0.32-1.68 1.2-2.24 0.96-0.64 2.4-1.040 4.4-1.52 1.68-0.4 2.64-0.64 3.2-0.96v2z"
              ></path>
              <path
                fill="currentColor"
                d="M177.92 13.92c-2.96 0-5.44 2.24-5.44 5.44v12h-5.6v-21.84h5.28l0.24 2.24h0.080c1.68-2 3.44-2.8 5.12-2.8 0.64 0 1.2 0.080 1.36 0.24v4.72c-0.32 0.080-0.48 0-1.040 0z"
              ></path>
              <path
                fill="currentColor"
                d="M191.12 13.92c-2.96 0-5.44 2.24-5.44 5.44v12h-5.6v-21.84h5.28l0.24 2.24h0.080c1.68-2 3.44-2.8 5.12-2.8 0.64 0 1.2 0.080 1.36 0.24v4.72c-0.32 0.080-0.48 0-1.040 0z"
              ></path>
              <path
                fill="currentColor"
                d="M202.24 27.2c-2.72 0-5.12-2.16-5.12-4.96v-0.32h15.52c0-7.44-4-13.12-10.72-13.12s-10.72 5.76-10.72 11.36c0 5.92 3.92 11.84 11.2 11.84 7.6 0 9.92-6.48 9.92-7.44h-5.76c-0.72 1.52-2.16 2.64-4.32 2.64zM201.84 13.36c2.64 0 4.64 1.84 4.64 4.56h-9.36c0-1.84 1.44-4.56 4.72-4.56z"
              ></path>
              <path
                fill="currentColor"
                d="M213.52 1.6h5.6v29.76h-5.6v-29.76z"
              ></path>
            </svg>
          </a>
          <a
            class="registry--item"
            href="https://www.bedbathandbeyond.com/store/giftregistry/viewregistryguest/547232609?eventType=Wedding"
            target="_blank"
          >
            <svg viewBox="0 0 127 39" id="bbb-logo" width="100%" height="100%">
              <g fill="currentColor" fill-rule="evenodd">
                <path
                  fill-rule="nonzero"
                  d="M123.303 23.864c.264 0 .727.05.727-.288 0-.218-.29-.258-.52-.258h-.566v.546h.36zm.995 1.276h-.359l-.636-.978h-.359v.978h-.298v-2.121h.926c.382 0 .756.105.756.561 0 .418-.294.573-.672.582l.642.978zm.727-1.048c0-.913-.763-1.639-1.653-1.639-.892 0-1.653.726-1.653 1.639 0 .914.761 1.639 1.653 1.639.89 0 1.653-.725 1.653-1.639zm-3.604 0a1.93 1.93 0 0 1 1.95-1.936 1.93 1.93 0 0 1 1.952 1.936 1.93 1.93 0 0 1-1.951 1.936 1.93 1.93 0 0 1-1.951-1.936zM104.35 34.115h.739c3.956 0 7-.81 7-2.718 0-2.045-2.653-2.912-7-2.912h-.74v5.63zM92.435 23.934h12.132c11.002 0 19.438 2.14 19.438 7.482 0 4.32-6.871 7.06-16.482 7.06H92.435V23.933zm-16.086.01H68.47v14.54h7.848v-7.397l6.95 7.397h7.85v-14.54h-7.85v7.536zm-24.47 7.376c0 1.658 1.625 2.795 3.951 2.795 2.327 0 3.95-1.137 3.95-2.795 0-1.543-1.511-2.835-3.95-2.835-2.437 0-3.951 1.292-3.951 2.835m15.638-.078c0 4.668-5.24 7.463-11.687 7.463-6.445 0-11.686-2.795-11.686-7.463 0-4.57 5.27-7.54 11.686-7.54 6.418 0 11.687 2.97 11.687 7.54"
                ></path>
                <path
                  fill-rule="nonzero"
                  d="M34.793 23.934l2.192 3.798h.21c.207-.462.389-.925.65-1.369l1.41-2.43h8.036l-6.732 8.273v6.269h-6.992v-6.269l-6.862-8.272h8.088zm-20.024 0h11.76v3.973H21.17v1.388h4.894v3.78H21.17v1.427h5.543v3.973H14.769zm-9.33 11.07h.658c.957 0 2.34-.02 2.34-1.216 0-1.214-1.488-1.195-2.424-1.195h-.574v2.41zm.531-5.478c.852 0 1.808-.076 1.808-1.08 0-1.08-1.085-1.003-1.935-1.003H5.44v2.083h.53zM.039 23.934h6.783c3.103 0 6.27.674 6.27 4.03 0 1.273-.702 2.526-2.104 2.931v.117c1.744.558 2.85 1.715 2.85 3.45 0 2.99-3.062 4.013-5.87 4.013H.039V23.934zm113.52-16.865c.972-.766 2.304-1.558 2.304-2.962 0-1.354-.974-2.094-2.254-2.094-1.15 0-2.15.817-2.15 2.042 0 .971.59 1.687 1.154 2.401l.638.818.308-.205zm-1.05 3.371c-1.33.92-3.506 2.221-3.506 4.06 0 1.839 1.74 3.55 3.583 3.55 1.792 0 3.225-1.353 4.428-2.554l-4.274-5.21-.23.154zm5.938 6.741c-1.46 1.712-3.507 3.014-5.784 3.014-3.224 0-5.913-2.349-5.913-5.669 0-2.452 1.536-3.78 3.38-5.107l1.203-.868c-1.1-1.15-2.125-2.58-2.125-4.215 0-2.655 1.92-4.212 4.453-4.212 2.355 0 4.453 1.48 4.453 4.009 0 2.17-1.894 3.626-3.506 4.8l4.018 4.852 2.253-2.605 1.535 1.583-2.355 2.759 3.456 4.265h-2.968l-2.1-2.606zm-20.39-8.886V.532h2.407v19.255h-2.406v-9.245h-9.189v9.245h-2.405V.532h2.406v7.763zM80.584 19.787h-2.406V2.728h-4.582V.532h11.568v2.196h-4.58z"
                ></path>
                <path
                  d="M62.691 14.96l-2.2 4.826h-2.587L67.12-.286l9.214 20.072h-2.585l-2.201-4.827H62.69zm4.428-9.984l-3.43 7.787h6.86l-3.43-7.787z"
                ></path>
                <path
                  fill-rule="nonzero"
                  d="M49.23 17.641h1.844c2.227 0 4.554-.663 4.554-3.395 0-2.707-2.762-3.27-4.913-3.27H49.23v6.665zm0-8.58h.615c2.277 0 4.145-.46 4.145-3.218 0-2.707-1.842-3.165-4.095-3.165h-.665V9.06zM46.824.532h2.355c3.634 0 7.064.945 7.064 5.286 0 1.404-.768 3.038-2.073 3.652v.05c2.279.41 3.864 2.63 3.864 4.878 0 3.856-3.3 5.388-6.705 5.388h-4.505V.532zM27.639 17.591h.845c4.913 0 9.163-1.84 9.163-7.431 0-5.619-4.25-7.432-9.163-7.432h-.845V17.59zM25.233.533h3.993c5.912 0 10.827 3.115 10.827 9.524 0 6.563-4.812 9.73-10.904 9.73h-3.916V.532zm-12.617 0H22.98v2.195h-7.96v5.389h7.73v2.195h-7.73v7.279h7.96v2.196H12.615z"
                ></path>
                <path
                  d="M0 .532h2.354c3.636 0 7.064.945 7.064 5.287 0 1.403-.768 3.037-2.072 3.65 2.278.46 3.864 2.682 3.864 4.929 0 3.856-3.302 5.388-6.706 5.388H0V.532zm2.406 17.11h1.842c2.227 0 4.557-.664 4.557-3.396 0-2.707-2.765-3.27-4.915-3.27H2.406v6.666zm0-8.58h.613c2.28 0 4.148-.46 4.148-3.22 0-2.705-1.844-3.164-4.095-3.164h-.666v6.384z"
                ></path>
              </g>
            </svg>
          </a>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import Vue from "vue";
import googleMapLoader from "./mixins/googleMapLoader";

export default Vue.extend({
  mixins: [googleMapLoader],
  data() {
    return {
      map: null,
    };
  },
  async mounted() {
    await this.loadGoogleMaps("AIzaSyCRaKhP44xTots5SkgXfJHHtWa5zWT8s3s");

    this.map = new google.maps.Map(this.$refs.mapContainer, {
      center: {
        lat: 41.4086096,
        lng: -85.735408,
      },
      zoom: 16,
      zoomControl: true,
      disableDefaultUI: true,
      fullscreenControl: true,
      gestureHandling: "cooperative",
      styles: [
        {
          featureType: "poi.government",
          stylers: [
            {
              visibility: "off",
            },
          ],
        },
        {
          featureType: "poi.government",
          elementType: "geometry",
          stylers: [
            {
              visibility: "off",
            },
          ],
        },
        {
          featureType: "poi.park",
          stylers: [
            {
              visibility: "off",
            },
          ],
        },
        {
          featureType: "poi.place_of_worship",
          stylers: [
            {
              visibility: "off",
            },
          ],
        },
        {
          featureType: "poi.school",
          elementType: "geometry",
          stylers: [
            {
              visibility: "off",
            },
          ],
        },
        {
          featureType: "poi.sports_complex",
          stylers: [
            {
              visibility: "off",
            },
          ],
        },
        {
          featureType: "road",
          stylers: [
            {
              color: "#d6d6d6",
            },
            {
              visibility: "simplified",
            },
          ],
        },
        {
          featureType: "water",
          elementType: "geometry.fill",
          stylers: [
            {
              color: "#6891a8",
            },
          ],
        },
      ],
    });
    this.addMarkers();
  },
  methods: {
    addMarkers() {
      let marker = new google.maps.Marker({
        map: this.map,
        zIndex: 12312321,
        position: {
          lat: 41.4086861,
          lng: -85.73485939999999,
        },
        animation: google.maps.Animation.DROP,
        icon: {
          url: require("./../../../img/map-icons/star-full.svg"),
          scaledSize: new google.maps.Size(25, 25),
          fillColor: "#1077aa",
          fillOpacity: 1,
          strokeColor: "#1077aa",
        },
      });

      marker.addListener("click", () => {
        new google.maps.InfoWindow({
          content: `
            <div class="title full-width">Oakwood Resort</div>
                <div class="address">
                <div class="address-line full-width">702 E Lake View Rd</div>
                <div class="address-line full-width">Syracuse, IN 46567</div>
            </div>

            </div>
                <div class="view-link">
                    <a target="_blank" href="https://maps.google.com/maps?ll=41.40861,-85.734859&amp;z=16&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3&amp;cid=16636822861888824603">
                        <span> View on Google Maps </span>
                    </a>
                </div>
            </div>
          `,
        }).open(this.map, marker);
      });
    },
  },
});
</script>

<style>
.map-container {
  flex: 1 1 auto;
  align-self: stretch;
}
.gm-style-iw {
  color: black;
}
</style>
