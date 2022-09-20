<template >
  <div class="container">
    <searches> </searches>

    <div class="sale">List Product</div>

    <div class="tableContrainer ">
      <b-table-simple class="table shopCard">
        <b-thead>
          <b-tr>
            <b-th> Code product </b-th>
            <b-th> Date </b-th>
            <b-th> Brand </b-th>
            <b-th> Color </b-th>
            <b-th> price </b-th>
            <b-th> Add </b-th>
          </b-tr>
        </b-thead>

        <b-tbody>
          <b-tr v-for="(item, i) in items" :key="i" :to="item.to">
            <b-td>{{ item.Code_Product }}</b-td>
            <b-td>{{ item.Date }}</b-td> 
            <b-td>{{ item.Brand }}</b-td>
            <b-td>{{ item.Color }}</b-td>
            <b-td>{{ item.price }}</b-td>
            <b-td> <b-button class="but-co"  size="sm" >Add</b-button> </b-td>
          </b-tr>
        </b-tbody>
      </b-table-simple>
    </div>

  </div>
</template>
<script>
import searches from "../pages/Shop/search.vue";
export default {
  layout: "coreLayout",
  components: {searches},
  data() {
    return {
      items: [
        {
          Code_Product: "13287",
          Date: "2022-08-24",
          Brand: "HP",
          Color: "Blue",
          price: "115",
        },
        {
          Code_Product: "13288",
          Date: "2022-08-24",
          Brand: "HP",
          Color: "Blue",
          price: "115",
        },
        {
          Code_Product: "13289",
          Date: "2022-08-24",
          Brand: "HP",
          Color: "Blue",
          price: "115",
        },
        {
          Code_Product: "13289",
          Date: "2022-08-24",
          Brand: "HP",
          Color: "Blue",
          price: "115",
        },
        {
          Code_Product: "13289",
          Date: "2022-08-24",
          Brand: "HP",
          Color: "Blue",
          price: "115",
        },
        {
          Code_Product: "13289",
          Date: "2022-08-24",
          Brand: "HP",
          Color: "Blue",
          price: "115",
        },
        {
          Code_Product: "13289",
          Date: "2022-08-24",
          Brand: "HP",
          Color: "Blue",
          price: "115",
        },
        {
          Code_Product: "13289",
          Date: "2022-08-24",
          Brand: "HP",
          Color: "Blue",
          price: "115",
        },
        {
          Code_Product: "13289",
          Date: "2022-08-24",
          Brand: "HP",
          Color: "Blue",
          price: "115",
        },
        {
          Code_Product: "13289",
          Date: "2022-08-24",
          Brand: "HP",
          Color: "Blue",
          price: "115",
        },
        {
          Code_Product: "13289",
          Date: "2022-08-24",
          Brand: "HP",
          Color: "Blue",
          price: "115",
        },
        {
          Code_Product: "13289",
          Date: "2022-08-24",
          Brand: "HP",
          Color: "Blue",
          price: "115",
        },
        {
          Code_Product: "13289",
          Date: "2022-08-24",
          Brand: "HP",
          Color: "Blue",
          price: "115",
        },
        {
          Code_Product: "13289",
          Date: "2022-08-24",
          Brand: "HP",
          Color: "Blue",
          price: "115",
        },
        {
          Code_Product: "13289",
          Date: "2022-08-24",
          Brand: "HP",
          Color: "Blue",
          price: "115",
        },

        {
          Code_Product: "13289",
          Date: "2022-08-24",
          Brand: "HP",
          Color: "Blue",
          price: "115",
        },
      ],
    };
  },
};
</script>
<style></style>
