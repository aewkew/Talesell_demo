<template>
  
    <b-nav>
      <b-nav-item
        v-for="(item, i) in items"
        :key="i"
        :to="item.to"
        router
       
        class="nav-item">
      
        <a lass="nav-link">
          
          <b-icon class="icon" :icon="item.icon"></b-icon>
          <b-nav-text> <p>{{ item.title }} </p></b-nav-text>
        
        </a>
      </b-nav-item>
    </b-nav>

</template>
<script>
export default {
  name: "sidebar-link",
  data() {
    return {
      items: [
        {
          icon: "display",
          title: "Dashboard",
          to: "/Dashboard",
        },
        {
          icon: "shop-window",
          title: "Shop",
          to: "/Shop",
        },
        {
          icon: "bell",
          title: "Notifications",
          to: "/Notifications",
        },
       
      
        {
          icon: "list-task",
          title: "TableList",
          to: "/TableList",
        },
        {
          icon: "person-circle",
          title: "UserProfile",
          to: "/UserProfile",
        },
      ],
    };
  },
};
</script>

<style scoped>
</style>
