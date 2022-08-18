<template>
 
  <div class="row">
    
    <div class="container">

      <div class="col-xl-12 col-lg-12 col-md-12">
        <UserCard> </UserCard>
      </div>
    </div>

  </div>

</template>

<script>
import UserCard from "./UserProfile/UserCard.vue";
import EditProfileForm from "./UserProfile/EditProfileForm.vue";
export default {
  layout: "coreLayout",
  components: {
    UserCard,
    EditProfileForm,
  },
};
</script>

<style lang=""></style>
