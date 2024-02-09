<template>
  <section>
    <figure><img :src="props.image" :alt="titre" class="pochettePrincipale" height="500">
      <figcaption>{{ props.titre }} | {{props.artiste}}</figcaption>
      <RouterLink class="voir-plus" :to="'/album/'+id">Voir plus</RouterLink>
    </figure>
  </section>
</template>

<script setup>
import {useRouter, RouterLink} from 'vue-router';

const router = useRouter();

const props = defineProps({
  id: Number,
  titre: String,
  image: String,
  artiste : String,
})

</script>
