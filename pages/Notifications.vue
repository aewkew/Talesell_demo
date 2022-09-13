<template>
  <div class="container">
    <div class="sale">Notifications</div>

    <div class="tableContrainer shopCard ">
      <b-table-simple class="table">
        <b-thead>
          <b-tr>
            <b-th>Date</b-th>
            <b-th>Customer</b-th>
            <b-th>Employee</b-th>
            <b-th>Tel</b-th>
            <b-th>Details</b-th>
          </b-tr>
        </b-thead>

        <b-tbody>
          <b-tr v-for="(item, i) in items" :key="i" :to="item.to">
            <b-td>{{ item.Date }}</b-td>
            <b-td>{{ item.Customer }}</b-td> 
            <b-td>{{ item.employee }} </b-td>
            <b-td>{{ item.tel }}</b-td>
            <b-td> <b-button class="but-co" size="sm"> Details</b-button> </b-td>
          </b-tr>
        </b-tbody>
      </b-table-simple>
    </div>
  </div>
</template>
<script>
import Card from "@/components/Cards/Card.vue";
export default {
  components: {
    Card,
  },
  layout: "coreLayout",

  data() {
    return {
      items: [
        {
          Date: "2022-08-27",
          Customer: "Aew",
          tel: "0876186637",
          employee: "Tiger Kung",
          Invoid: "1562488",
        },
        {
          Date: "2022-08-27",
          Customer: "Aew",
          tel: "0876186637",
          employee: "Tiger Kung",
          Invoid: "1562488",
        },
        {
          Date: "2022-08-27",
          Customer: "Aew",
          tel: "0876186637",
          employee: "Tiger Kung",
          Invoid: "1562488",
        },
        {
          Date: "2022-08-27",
          Customer: "Aew",
          tel: "0876186637",
          employee: "Tiger Kung",
          Invoid: "1562488",
        },
        {
          Date: "2022-08-27",
          Customer: "Aew",
          tel: "0876186637",
          employee: "Tiger Kung",
          Invoid: "1562488",
        },
        {
          Date: "2022-08-27",
          Customer: "Aew",
          tel: "0876186637",
          employee: "Tiger Kung",
          Invoid: "1562488",
        },
        {
          Date: "2022-08-27",
          Customer: "Aew",
          tel: "0876186637",
          employee: "Tiger Kung",
          Invoid: "1562488",
        },
        {
          Date: "2022-08-27",
          Customer: "Aew",
          tel: "0876186637",
          employee: "Tiger Kung",
          Invoid: "1562488",
        },
        {
          Date: "2022-08-27",
          Customer: "Aew",
          tel: "0876186637",
          employee: "Tiger Kung",
          Invoid: "1562488",
        },
        {
          Date: "2022-08-27",
          Customer: "Aew",
          tel: "0876186637",
          employee: "Tiger Kung",
          Invoid: "1562488",
        },
        {
          Date: "2022-08-27",
          Customer: "Aew",
          tel: "0876186637",
          employee: "Tiger Kung",
          Invoid: "1562488",
        },
        {
          Date: "2022-08-27",
          Customer: "Aew",
          tel: "0876186637",
          employee: "Tiger Kung",
          Invoid: "1562488",
        },
        {
          Date: "2022-08-27",
          Customer: "Aew",
          tel: "0876186637",
          employee: "Tiger Kung",
          Invoid: "1562488",
        },

        {
          Date: "2022-08-27",
          Customer: "Aew",
          tel: "0876186637",
          employee: "Tiger Kung",
          Invoid: "1562488",
        },
      ],
    };
  },
};
</script>
<style lang=""></style>
