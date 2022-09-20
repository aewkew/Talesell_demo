<template>
  <nav>
    <b-nav>
      <b-nav-item  to="../Dashboard" 
        ><b-icon  icon="display"></b-icon> Dashboard</b-nav-item
      >
      <b-nav-item to="../Shop"
        ><b-icon  icon="shop-window"></b-icon> Shop</b-nav-item
      >
      <b-nav-item to="../Notifications"
        ><b-icon  icon="bell"></b-icon> Notifications</b-nav-item
      >
      <b-nav-item to="../TableList"
        ><b-icon  icon="list-task"></b-icon> TableList</b-nav-item
      >
      <b-nav-item to="../UserProfile">
        <b-icon  icon="person-circle"></b-icon>
        UserProfile</b-nav-item
      >
      <b-nav-item to="../invoice">
        <b-icon  icon="file-earmark"></b-icon>
        Invoice</b-nav-item
      >
    </b-nav>
  </nav>
</template>

<script>
export default {
  name: "sidebar-link",
};
</script>

<style></style>
