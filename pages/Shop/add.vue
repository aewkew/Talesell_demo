<template>
  <b-modal id="my-modal" title="Add product">
    <div>
      <b-form @submit="onSubmit" @reset="onReset" v-if="show">
        <b-form-group id="input-group-2" label="Brand">
          <b-form-select v-model="selected" :options="brands"> </b-form-select>
        </b-form-group>

        <b-form-group id="input-group-2" label="Color" label-for="input-2">
          <b-form-select id="input-2" v-model="selected2" :options="colors">
          </b-form-select>
        </b-form-group>

        <b-form-group id="input-group-price" label="Price" label-for="input-4">
          <b-form-input
            id="input-4"
            label="Price"
            type="number"
            v-model="form.price"
            placeholder="price"
            required
          >
          </b-form-input>
        </b-form-group>

        <b-form-group id="input-group-value" label="Value">
          <b-form-spinbutton
            id="demo-sb"
            v-model="value"
            min="1"
            max="100"
          ></b-form-spinbutton>
        </b-form-group>

        <b-card class="mt-3">
        Brands: {{ selected }} <br />
        Colors: {{ selected2 }} <br />
        Price: {{ form.price }} <br />
        Value: {{ value }}
      </b-card>

        <div class="subre">
          <b-button  type="submit" variant="primary">Submit</b-button>
          <b-button type="reset" variant="danger">reset</b-button>
        </div>


      </b-form>

      
    </div>
  </b-modal>
</template>
<script>
export default {
  data() {
    return {
      selected: null,
      brands: ["canon", "epson", "Hp", "Brother", "Epson"],
      selected2: null,
      colors: ["black", "yellow", "blue", "Red"],
      form: {
        price: "",
      },
      value: 0,
      show: true,
    };
  },
  methods: {
    onSubmit(event) {
      event.preventDefault();
      //alert(JSON.stringify(this.form));
      console.log(this.selected);
      console.log(this.selected2);
      console.log(this.form.price);
      console.log(this.value);
    },
    onReset(event) {
      event.preventDefault();
      //reset our form value
      this.selected = "";
      this.selected2 = "";
      this.form.price = "";
      this.value = "";
      // Trick toreset/clear
      this.show = false;
      this.$nextTick(() => {
        this.show = true;
      });
    },
  },
};
</script>
<style></style>
