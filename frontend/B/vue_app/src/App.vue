<template>
  <v-app>
    <v-main>
      <InputPage/>
    </v-main>
  </v-app>
</template>

<script>
import InputPage from './InputPage';

export default {
  name: 'App',

  components: {
    InputPage,
  },

  data: () => ({
    //
  }),
};
</script>
