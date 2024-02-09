<template>
  <Album :titre="titre" :image="props.baseUrl + image" :artiste="artiste" :id="id"/>
  <section id="slider">
    <h1>Nos albums</h1>
    <ul class="slider-cat">
      <li v-for="(p, index) in props.categories" :key="index" @click="$emit('update:cat', p)">
        {{p.nom}}
      </li>
    </ul>
    <ul class="slider-albums">
      <li v-for="(p, index) in props.photos" :key="index">
        <a href="#" :title="p.titre"><img :src="props.baseUrl + p.mini" :alt="p.titre" @click="changePhoto(p)"></a>
      </li>
    </ul>
  </section>
</template>

<script setup>
import Album from "./Album.vue"
import { ref } from 'vue'

const props = defineProps({
  photos: Array,
  baseUrl: String,
  categories: Array,
})

const id = ref(props.photos[0].id)
const titre = ref(props.photos[0].titre)
const image = ref(props.photos[0].lien)
const artiste = ref(props.photos[0].artiste)

function changePhoto(p) {
  image.value=p.lien
  titre.value=p.titre
  artiste.value=p.artiste
  id.value=p.id
}

defineEmits([
    'update:cat'
])

</script>
