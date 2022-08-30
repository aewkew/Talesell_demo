<template>
  <div>
    <card class="shopCard container">

      <div class="row">
        <div class="col-4">
          <b-input-group>
            <b-form-input class="search" placeholder="search"></b-form-input>
            <b-button class="but-co"> <b-icon icon="search"></b-icon></b-button>
          </b-input-group>
        </div>

        <div  class="col-3">
          <div  >
            <b-form inline >
              <label> Brands </label>
              <b-form-group id="input-group-2">
                <b-form-select v-model="selected" :options="brands">
                </b-form-select>
              </b-form-group>
            </b-form>
          </div>
        </div>

        <div class="col-3">
          <div>
            <b-form inline>
              <label> Colors </label>
               <b-form-group id="input-group-2"  label-for="input-2">
            <b-form-select id="input-2" v-model="selected2" :options="colors"> </b-form-select>
        </b-form-group>
            </b-form>
          </div>
        </div>

        <div class="col-2">
          <b-button v-b-modal.my-modal class="but-co">
            <b-icon icon="plus-lg" class="icon"></b-icon>
          </b-button>
          <Addsh></Addsh>
        </div>
      </div>
    </card>
  </div>
</template>

<script>
import Card from "@/components/Cards/Card.vue";
import Addsh from "../Shop/add.vue";
export default {
  components: {
    Card,
    Addsh,
  },
  data() {
    return {
      selected: null,
      brands: ["canon", "epson", "Hp", "Brother", "Epson"],
      selected2: null,
      colors: ["black", "yellow", "blue", "Red"],
      show: true,
    };
  },
};
</script>
<style></style>
