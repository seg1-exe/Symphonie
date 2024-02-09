<template>
    <section class="albumdetail_pochette">
        <img :src="'/pochettes/'+album.pochette" :alt="titre" class="pochettePrincipale" height="500">
    </section>
    <section class="albumdetail_infos">
        <ul>
            <li class="albumdetail_element">Nom de l'album : {{album.nom}}</li>
            <ul class="albumdetail_list albumdetail_element">
                Artiste(s) :  
                <li v-for="artiste in album.artistes">
                    {{artiste.nom}} 
                </li>
            </ul>
            <li class="albumdetail_element">Date de sortie : {{(new Date(album.date)).toLocaleDateString('fr-FR')}}</li>
            <ul class="albumdetail_list albumdetail_element">
                Catégorie(s) : 
                <li v-for="categorie in album.categories">
                    {{categorie.nom}}  
                </li>
            </ul>
            <li class="albumdetail_element"><iframe :src="album.spotify" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe></li>
        </ul>
    </section>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import axios from 'axios'
import { useRoute } from 'vue-router';

const route  = useRoute()
    
const album = ref(false)

onMounted(()=>{
  axios.get('/api/album/'+route.params.id).then((response)=>{
      album.value = response.data;
  })
})

</script>