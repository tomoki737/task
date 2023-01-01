<template>
  <div>
    <div class="mx-0" style="border: solid 1px; width: 300px; height: 500px">
      <div v-for="(fruit, index) in fruits" :key="index">
        <p
          style="
            font-size: 16px;
            border-color: navy;
            border-bottom: solid 1px;
            margin: 10px 10%;
            text-align: center;
            padding-bottom: 10px;
          "
        >
          {{ fruit }}
        </p>
      </div>
    </div>
    <div style="text-align: center">
      <button
        @click="$store.commit('moveRightCardFruit')"
        style="
          height: 40px;
          width: 100px;
          margin-top: 10px;
          background-color: navy;
          color: white;
          font-size: 16px;
        "
      >
        左へ
      </button>
    </div>
  </div>
</template>
<script>
export default {
  computed: {
    fruits() {
      return this.$store.state.rightCardFruits;
    },
  },
};
</script>
