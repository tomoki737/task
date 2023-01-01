<template>
  <v-container class="mt-10" style="width: 700px">
    <v-row class="d-flex justify-space-between">
      <left-card></left-card>
      <right-card></right-card>
    </v-row>
  </v-container>
</template>
<script>
import LeftCard from './components/LeftCardComponent.vue'
import RightCard from './components/RightCardComponent.vue'
export default {
  components: {LeftCard,RightCard},
  methods: {},
};
</script>
