<template>
  <v-container class="mt-10" style="max-width: 300px">
    <v-row>
      <v-col cols="9" class="px-0">
        <input
          type="text"
          style="outline: solid 1px black; height: 30px; width: 230px"
          v-model="inputText"
        />
      </v-col>
      <v-col cols="3">
        <v-btn
          style="background-color: #000080"
          tile
          height="30"
          dark
          @click="addText"
          >追加</v-btn
        >
      </v-col>

      <div v-for="(text, index) in allText" :key="index">
        <div
          class="mx-0 mb-2"
          style="border: solid 1px; width: 300px; height: 50px"
        >
          <span style="font-size: 16px; margin-left: 20px">{{ fruit }}</span>
        </div>
      </div>
    </v-row>
  </v-container>
</template>
<script>
export default {
  methods: {
  },
  computed: {
    fruit(){
      return this.$store.state.menu
    }
  }
};
</script>
