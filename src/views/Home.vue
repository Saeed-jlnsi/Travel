<template>
  <div :class="$style.container">
    <div :class="$style.homeHeader">
      <app-header></app-header>
    </div>
    <div :class="$style.content">
      <div :class="$style.heroText">
        <div class="$style.title">
          <h1>
            <span>your <span :class="$style.orangered">Travel <br></span>map <span :class="$style.orangered"> To </span></span>
          </h1>
        </div>
        <app-button color="regular" :class="$style.btnKish">Kish Island</app-button>
      </div>
      <div :class="$style.mainImage">
        <img :src="image" alt="">
      </div>
    </div>
    <div :class="$style.kishInfo">
      <h2>Welcome to Kish Island</h2>
      <div :class="$style.kishInfoContent">
        <div :class="$style.kishInfoImage">
          <img :class="$style.imageFirst" src="../assets/image/greek-ship.jpg" alt="">
          <img :class="$style.imageSeconde" src="../assets/image/hotel-dariush.jpg" alt="">
          <img :class="$style.imageThird" src="../assets/image/diving.jpg" alt="">
        </div>
        <div :class="$style.kishInfoText">
          <p>
            Kish is Located on the north east of the Persian Gulf with a minimum distance of 17 km from the southern
            offshore of the mainland Iran,
            the Kish island with an area of 90 square kilometres is one of the most marvelous and most beautiful
            regions of the Persian Gulf and has attracted the attention of many tribes and nations since times
            immemorial.
            Oval in shape, the island is 15 km long and 8 km wide.
            Kish is largely flat, sandy and uncultivated, with a high point of 45 meters above sea level.
            Although very hot and humid in summer, it has got a pleasant weather from about November to March, with an
            annual average temperature of 27 degrees centigrade.
            Its beautiful coast is covered with white silvery sand washed by azure blue waves of the sea. Already a
            famous island, Kish owes it present flourishing to its status as Irans first and, for a long time, the only
            free port, and its sweet water.

          </p>
        </div>
      </div>
      <div :class="$style.kishMap">
        <div :class="$style.kishMapMain">
          <div :class="$style.kishMapInfo">
            <p>
              The island is largely flat, sandy and uncultivated, with a high point of 45 meters above sea level.
              Although very hot and humid in summer, it has got a pleasant weather from about November to March, with
              an annual average temperature of 27 degrees centigrade.
              Its beautiful coast is covered with white silvery sand washed by azure blue waves of the sea. Already a
              famous island, Kish owes it present flourishing to its status as Irans first and, for a long time, the
              only free port, and its sweet water.
            </p>
          </div>
          <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28556.038849785895!2d53.95687559999998!3d26.536044599999997!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e50a9147e298609%3A0x625dad11bc3932e2!2sKish+Island!5e0!3m2!1sen!2s!4v1551012368398"
              width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>

    <!-- <div :class="$style.boxContainer">
      <app-box v-for="(city, index) in cities" :city="city" :key="index"></app-box>
    </div> -->

    <!-- CONTACT FORM: START -->

    <div :class="$style.contactForm">
      <div :class="$style.title">
        <h2>Contact US</h2>
      </div>
      <div :class="$style.contactUsInner">
        <app-custom-input name="name" placeHolder="Full Name ..." @input="changeName($event)" :class="$style.name"
          v-model="contactData.name"></app-custom-input>
        <app-custom-input name="email" placeHolder="Email ..." @input="changeEmail($event)" :class="$style.email"
          v-model="contactData.email" v-validate="'required|email'"></app-custom-input>
        <span :class="$style.validationMessage" v-show="errors.has('email')">{{ errors.first('email') }}</span>
        <app-custom-input name="phone" placeHolder="Phone ..." @input="changePhone($event)" :class="$style.phone"
          v-model="contactData.phone"></app-custom-input>
        <!-- <div :class="$style.textareaLabel">Message Content</div> -->
        <textarea v-model="contactData.comment" :class="$style.textArea" name="body" id="" cols="30" rows="8"
          placeholder="Type Your Message">
              </textarea>
        <app-button @click.native="submit" color="regular" :class="$style.confBtn">Send</app-button>
      </div>
    </div>

    <!-- CONTACT FORM: END -->

    <app-footer></app-footer>
    <app-modal v-if="openModal" @close="openModal = false"></app-modal>
  </div>
</template>

<script>
  import axios from 'axios'
  import Header from '@/components/Header/Header.vue';
  import Footer from '@/components/Footer/Footer.vue';
  import Box from '@/components/Box/Box.vue'
  import Button from '@/components/Button/Button.vue';
  import CustomInput from '@/components/CustomInput/CustomInput.vue';
  import Modal from '@/components/Modal/Modal.vue';

  export default {
    name: 'Home',
    data() {
      return {
        image: require('@/assets/image/main-image.png'),
        contactData: {
          name: null,
          email: null,
          phone: null,
          comment: ''
        },
        label: '',
        btnLabel: '',
        cities: [{
            cityName: 'Montreal',
            imageLink: 'greek-ship'
          },
          {
            cityName: 'Berlin',
            imageLink: 'persian-gulf-beauties'
          },
          {
            cityName: 'San Francisco',
            imageLink: 'entertainment'
          },
        ],
        openModal: false
      }
    },
    components: {
      appHeader: Header,
      appFooter: Footer,
      appBox: Box,
      appButton: Button,
      appCustomInput: CustomInput,
      appModal: Modal
    },
    methods: {
      changeName(e) {},
      changeEmail(e) {},
      changePhone(e) {},
      submit() {
        axios.post('./contact_handler.php', this.contactData)
          .then(function (response) {
            this.openModal = true
          })
          .catch(function (error) {
            console.log(error);
          });
      },
    }
  }

</script>

<style lang="scss" module>
  @import './home';

</style>
