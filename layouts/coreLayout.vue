<template>
  <div class="wrapper">
    <Sidebar></Sidebar>

    <div class="main-panel">
      <TopNavbar></TopNavbar>
      <DashContent>
        
      </DashContent>
    </div>


    
  </div>
</template>
<script>
import Sidebar from "../components/SidebarPlugin/Sidebar.vue";
import TopNavbar from "./topNavbar.vue";
import DashContent from "./Content.vue";
export default {
  components: {
    Sidebar,
    TopNavbar,
    DashContent

  },
};
</script>
<style lang=""></style>
