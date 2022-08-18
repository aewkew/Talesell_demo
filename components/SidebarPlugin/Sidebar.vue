<template>

  <div class="sidebar sidebar-blackground">
    <div class="sidebar-wrapper ">
      <div class="logo bb">
        <a href="#" class="simple-text">
          <div class="logo-img">
            <img
              src="https://seeklogo.com/images/B/Burger_King-logo-67A54F414B-seeklogo.com.png"
            />
          </div>
        {{ compname }}  
          
        </a>
        </div>
        
        <slot name="content"> </slot>

        <div class="nav">
          
          <sidebar-link> </sidebar-link>
         
        </div>

      
    </div>
  </div>
</template>

<script>
import SidebarLink from "../SidebarPlugin/SidebarLink";

export default {
  props: {
    compname: {
      type: String,
      default: "Telesell Comp",
    },
  },
  components: {
    SidebarLink,
  },
};
</script>

<style>


</style>
