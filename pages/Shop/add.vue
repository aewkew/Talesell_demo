<template lang="">
  <b-modal id="my-modal" title="Add Product">
    <div>
      <b-form @submit="onSubmit" @reset="onReset" v-if="show">
        <b-form-group id="input-group-1" label="Brand" label-for="input-1">
          <b-form-input
            id="input-1"
            v-model="form.nickname"
            type="text"
            placeholder="Enter NickName"
            required >
         
          </b-form-input>
        </b-form-group>

        <b-form-group id="input-group-2" label="Color" label-for="input-2">
          <b-form-input
            id="input-2"
            v-model="form.fullname"
            label="fullname"
            type="text"
            placeholder="Enter Fullname"
            required
          >
          </b-form-input>
        </b-form-group>

        <b-form-group id="input-group-3" label="Price" label-for="input-3">
          <b-form-input
            id="input-3"
            v-model="form.email"
            label="Email."
            type="email"
            placeholder="Enter Email"
            required
          >
          </b-form-input>
        </b-form-group>

        

        <b-button type="submit" variant="primary">Submit</b-button>
        <b-button type="reset" variant="danger">reset</b-button>
      </b-form>

      <b-card class="mt-3">
        Brand {{ form.nickname }} <br />
        Color {{ form.fullname }} <br />
        Price {{ form.email }} <br />
       
      </b-card>
    </div>
  </b-modal>
</template>
<script>
export default {
  data() {
    return {
      form: {
        nickname: "",
        fullname: "",
        email: ""
   
      },
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
      this.form.nickname = "";
      this.form.fullname = "";
      this.form.email = "";
      this.form.tel = "";
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
