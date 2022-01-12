<template>
  <section>
    <Header></Header>
    <main class="container">
      <section class="products">
        <div class="v-for" v-for="product in products">
          <Product :product="product"></Product>
        </div>
      </section>
    </main>
    <Footer></Footer>
  </section>
</template>

<script>
import Product from "./Product";
import Header from "./Header";
import Footer from "./Footer";

export default {
  name: "MainPage",
  components: {
    Footer,
    Header,
    Product
  },
  beforeCreate: function () {
    document.body.className = 'main';
  },
  data() {
    return {
      products: [
        {
          id: 1,
          title: 'Bandana I',
          year: '2021',
          description: 'Совместный студийный альбом российских рэп-исполнителей  Big Baby Tape и Kizaru',
          time: '36:06',
          price: '200',
          image: require('../assets/images/covers/1.jpg'),
          author: 'Big Baby Tape, Kizaru',
          genre: '\n' +
              'hip-hop'
        },
        {
          id: 2,
          title: 'Born To Trap',
          year: '2020',
          description: 'Описание...',
          time: '53:00',
          price: '200',
          image: require('../assets/images/covers/2.jpg'),
          author: 'Kizaru',
          genre: '\n' +
              'hip-hop'
        },
        {
          id: 3,
          title: 'Karmageddon',
          year: '2019',
          description: 'Описание...',
          time: '45:00',
          price: '200',
          image: require('../assets/images/covers/3.jpg'),
          author: 'Kizaru',
          genre: '\n' +
              'hip-hop'
        },
        {
          id: 4,
          title: 'Назад в будущее',
          year: '2018',
          description: 'Описание...',
          time: '36:45',
          price: '200',
          image: require('../assets/images/covers/4.jpg'),
          author: 'Kizaru',
          genre: '\n' +
              'hip-hop'
        },
        {
          id: 5,
          title: 'Яд',
          year: '2017',
          description: 'Описание...',
          time: '60:31',
          price: '200',
          image: require('../assets/images/covers/5.jpg'),
          author: 'Kizaru',
          genre: '\n' +
              'hip-hop'
        },
        {
          id: 6,
          title: 'Mas Fuerte',
          year: '2016',
          description: 'Описание...',
          time: '52:25',
          price: '200',
          image: require('../assets/images/covers/6.jpg'),
          author: 'Kizaru',
          genre: '\n' +
              'hip-hop'
        }
      ]
    }
  }
}
</script>

<style scoped src="../assets/styles/main_style.css">

</style>