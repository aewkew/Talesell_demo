<template lang="">
  <b-modal id="my-modal" title="Add Product">
    <div>
      <b-form @submit="onSubmit" @reset="onReset" v-if="show">
      
        <b-form-select v-model="selected" :options="options">
          
        </b-form-select>

        <b-form-group id="list-color" label="Color" label-for="input-color">
          <b-form-select
            id="list-color"
            v-modal="form.color"
            :options="colors"
            placeholder="Select One"
            required
          >
          </b-form-select>
        </b-form-group>

        <b-form-group id="input-group-3" label="Price" label-for="input-3">
          <b-form-input
            id="input-3"
            v-model="form.prices"
            placeholder="Enter Price"
            type="number"
            required
          >
          </b-form-input>
        </b-form-group>

        <b-button type="submit" variant="primary">Submit</b-button>
        <b-button type="reset" variant="danger">reset</b-button>
      </b-form>

      <b-card class="mt-3">
        Brand : {{ form.brand }} <br />
        Color : {{ form.color }} <br />
        Price : {{ form.price }} <br />
      </b-card>
    </div>
  </b-modal>
</template>
<script>
export default {
  data() {
    return {
      form: {
        price: "",
      },
      selected: null,
      options:[
        {brand:'Hp'},
      ],
      
      colors: [
        { text: "Select One", value: null },
        "Blue",
        "Black",
        "Red",
        "Yellow",
      ],
      show: true,
    };
  },
  methods: {
    onSubmit(event) {
      event.preventDefault();
      alert(JSON.stringify(this.form));
    },
    onReset(event) {
      event.preventDefault();
      //reset our form value
      this.form.brand = "";
      this.form.color = "";
      this.form.price = "";
      // Trick toreset/clear
      this.show = false;
      this.$nextTick(() => {
        this.show = true;
      });
    },
  },
};
</script>
<style lang=""></style>
