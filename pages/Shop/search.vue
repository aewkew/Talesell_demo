<template lang="">
  <div>
    <card class="shopCard container">

      <div class="row">
       <div class="col"> 
          <b-input-group>
          <b-form-input class="search" placeholder="search"></b-form-input>
          <b-button class="but-co" > <b-icon icon="search"></b-icon></b-button>
        </b-input-group>
       </div>

        <div class="col">
          <div>
            <b-form inline>
              <label> Brands </label>
            <b-form-group id="list-brand" label-for="input-brand">
              <b-form-select
               id="input-brand"
               v-modal="form.brand"
               :options = "brands"
               required >
              </b-form-select>
            </b-form-group>
            </b-form>
          </div>
        </div>

        <div class="col">
          <div>
            <b-form inline> 
              <label> Colors </label>
            <b-form-group id="list-color" label-for="input-color">
              <b-form-select 
              id="list-color" 
              v-modal="form.color" 
              :options = "colors"
              required >
            </b-form-select>
            </b-form-group>
            </b-form>
          </div>
        </div>
       

        <div class="col">
          <b-button v-b-modal.my-modal class="but-co">
            <b-icon icon="plus-lg"></b-icon>
          </b-button>
          <add></add>
        </div>

      </div>
    </card>
  </div>
</template>

<script>
import Card from "@/components/Cards/Card.vue";
import add from "../Shop/add.vue";
export default {
  components: {
    Card,
    add,
  },
  data() {
    return { 
      form:{
         brand: null,
         color: null,
      },
      brands: [{ text: 'Select One', value: null },'Hp', 'Canon', 'Epson', 'Brother'],
      colors: [{ text: 'Select One', value: null },'Blue', 'Black', 'Red', 'Yellow'],
      show: true
    }
  }
 
};
</script>
<style ></style>
