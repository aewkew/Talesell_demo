<template lang="">
  <div>
    <card class="shopCard container">
      <div class="row">
        <div class="col-8">
          <b-input-group>
            <b-form-input class="search" placeholder="search"></b-form-input>
            <b-button class="but-co"> <b-icon icon="search"></b-icon></b-button>
          </b-input-group>
        </div>

        <div class="col">
          <b-input-group>
            <b-form-datepicker id="example-datepicker" v-model="value" class="mb-2"></b-form-datepicker>
          </b-input-group>
        </div>

      </div>
    </card>
  </div>
</template>
<script>
import Card from "@/components/Cards/Card.vue";
export default {
  components: {
    Card,
  },
};
</script>
<style lang=""></style>
