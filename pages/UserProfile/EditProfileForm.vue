<template>
  <b-modal id="my-modal" title="Edit Profile">
    <div>
      <b-form @submit="onSubmit" @reset="onReset" v-if="show">
        <b-form-group id="input-group-1" label="Nickname" label-for="input-1">
          <b-form-input
            id="input-1"
            v-model="form.nickname"
            type="text"
            placeholder="Enter NickName"
            required
          >
          </b-form-input>
        </b-form-group>

        <b-form-group id="input-group-2" label="Fullname" label-for="input-2">
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

        <b-form-group id="input-group-3" label="Email" label-for="input-3">
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

        <b-form-group id="input-group-tel" label="Tel." label-for="input-4">
          <b-form-input
            id="input-4"
            label="Tel."
            type="text"
            v-model="form.tel"
            placeholder="Enter Tel."
            required
          >
          </b-form-input>
        </b-form-group>

        <b-card class="mt-3">
          Nickname: {{ form.nickname }} <br />
          Fullname: {{ form.fullname }} <br />
          Email: {{ form.email }} <br />
          Tel.: {{ form.tel }}
        </b-card>
        <div class="subre">
          <b-button type="submit" variant="primary">Submit</b-button>
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
      form: {
        nickname: "",
        fullname: "",
        email: "",
        tel: "",
      },
      show: true,
    };
  },
  methods: {
    onSubmit(event) {
      event.preventDefault();
      //alert(JSON.stringify(this.form));
      console.log(this.form);
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
<style></style>
