import Vue from "vue";
import Vuex from "vuex";

Vue.use(Vuex);

export default new Vuex.Store({
  state: {
    leftCardFruits: ["Apple", "Grape", "StrawBerry", "Cherry", "Plum"],
    rightCardFruits: ["Wartermelon", "Banana", "Peach"],
  },
  
  mutations: {
    moveLeftCardFruit(state) {
      const leftCardFruits = state.leftCardFruits;
      const addFruit = leftCardFruits[leftCardFruits.length - 1];

      if (!addFruit) {
        return;
      }

      state.leftCardFruits.pop();
      state.rightCardFruits.push(addFruit);
    },

    moveRightCardFruit(state) {
      const rightCardFruits = state.rightCardFruits;
      const addFruit = rightCardFruits[rightCardFruits.length - 1];

      if (!addFruit) {
        return;
      }

      state.rightCardFruits.pop();
      state.leftCardFruits.push(addFruit);
    },
  },
});
