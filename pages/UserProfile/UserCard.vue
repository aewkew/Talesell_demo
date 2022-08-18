<template>
  <div>
    <card class="card-user container">
      <div class="row">
        <div>
          <div class="col-3">
            <img class="avatar" src="@/assets/img/face/face.jpg" />
          </div>
        </div>

        <div class="col-7">
          <div class="row">
            <div class="col datapro">
              <div class="headname">NickName</div>
              <div class="dataname">Aewkew</div>
            </div>

            <div class="col datapro">
              <div class="headname">FullName</div>
              <div class="dataname">Konrawee Juntasoot</div>
            </div>
          </div>

          <div class="row">
            <div class="col datapro">
              <div class="headname">Email</div>
              <div class="dataname">geeg2012@hotmail.com</div>
            </div>

            <div class="col datapro">
              <div class="headname">Tel.</div>
              <div class="dataname">0877646464</div>
            </div>
          </div>
        </div>

        <div class="col-2">
          <div class="row">
            <div class="col-9 datapro">
              <div class="headname">Total</div>
              <div class="dataname">10000</div>
            </div>
          </div>

          <div class="row">
            <div class="col-12 datapro">
              <div class="headname">Commission</div>
              <div class="dataname">1000</div>
            </div>
          </div>
        </div>

        <div class="col butte">
          <b-button v-b-modal.my-modal class="but-co" >
            <b-icon icon="pencil " class="icon"></b-icon>
          </b-button>
           <EditForm></EditForm>
        </div>
      </div>
    </card>

    <div class="sale">Sales History</div>

    <div class="tableContrainer">
      <b-table-simple class="table">
        <b-thead>
          <b-tr>
            <b-th>Date</b-th>
            <b-th>Name</b-th>
            <b-th>Tel</b-th>
            <b-th>Code_Product</b-th>
            <b-th>Name_Product</b-th>
          </b-tr>
        </b-thead>

        <b-tbody>
          <b-tr v-for="(item, i) in items" :key="i" :to="item.to">
            <b-td>{{ item.Date }}</b-td>
            <b-td>{{ item.Name }}</b-td>
            <b-td>{{ item.Tel }}</b-td>
            <b-td>{{ item.Code_Product }}</b-td>
            <b-td>{{ item.Name_Product }}</b-td>
          </b-tr>
        </b-tbody>
      </b-table-simple>
    </div>
    
  </div>
</template>

<script>
import Card from "@/components/Cards/Card.vue";
import TableList from "../TableList.vue";
import EditForm from "./EditProfileForm.vue";
export default {
  components: {
    Card,
    TableList,
    EditForm
},
  data() {
    return {
      
      items: [
        {
          Date: "2022-08-01",
          Name: "aaudee mamayuy",
          Tel: "087-1235088",
          Code_Product: "051203",
          Name_Product: "Hp black",
        },
        {
          Date: "2022-08-02",
          Name: "aaudee mamayuy",
          Tel: "087-1235088",
          Code_Product: "051203",
          Name_Product: "Hp black",
        },
        {
          Date: "2022-08-06",
          Name: "aaudee mamayuy",
          Tel: "087-1235088",
          Code_Product: "051203",
          Name_Product: "Hp black",
        },
        {
          Date: "2022-08-06",
          Name: "aaudee mamayuy",
          Tel: "087-1235088",
          Code_Product: "051203",
          Name_Product: "Hp black",
        },
        {
          Date: "2022-08-06",
          Name: "aaudee mamayuy",
          Tel: "087-1235088",
          Code_Product: "051203",
          Name_Product: "Hp black",
        },
        {
          Date: "2022-08-06",
          Name: "aaudee mamayuy",
          Tel: "087-1235088",
          Code_Product: "051203",
          Name_Product: "Hp black",
        },
        {
          Date: "2022-08-06",
          Name: "aaudee mamayuy",
          Tel: "087-1235088",
          Code_Product: "051203",
          Name_Product: "Hp black",
        },
        {
          Date: "2022-08-06",
          Name: "aaudee mamayuy",
          Tel: "087-1235088",
          Code_Product: "051203",
          Name_Product: "Hp black",
        },
        {
          Date: "2022-08-06",
          Name: "aaudee mamayuy",
          Tel: "087-1235088",
          Code_Product: "051203",
          Name_Product: "Hp black",
        },
        {
          Date: "2022-08-06",
          Name: "aaudee mamayuy",
          Tel: "087-1235088",
          Code_Product: "051203",
          Name_Product: "Hp black",
        },
        {
          Date: "2022-08-06",
          Name: "aaudee mamayuy",
          Tel: "087-1235088",
          Code_Product: "051203",
          Name_Product: "Hp black",
        },
        {
          Date: "2022-08-06",
          Name: "aaudee mamayuy",
          Tel: "087-1235088",
          Code_Product: "051203",
          Name_Product: "Hp black",
        },
        {
          Date: "2022-08-06",
          Name: "aaudee mamayuy",
          Tel: "087-1235088",
          Code_Product: "051203",
          Name_Product: "Hp black",
        },
        {
          Date: "2022-08-06",
          Name: "aaudee mamayuy",
          Tel: "087-1235088",
          Code_Product: "051203",
          Name_Product: "Hp black",
        },
        {
          Date: "2022-08-06",
          Name: "aaudee mamayuy",
          Tel: "087-1235088",
          Code_Product: "051203",
          Name_Product: "Hp black",
        },
        {
          Date: "2022-08-06",
          Name: "aaudee mamayuy",
          Tel: "087-1235088",
          Code_Product: "051203",
          Name_Product: "Hp black",
        },
        {
          Date: "2022-08-06",
          Name: "aaudee mamayuy",
          Tel: "087-1235088",
          Code_Product: "051203",
          Name_Product: "Hp black",
        },
        {
          Date: "2022-08-06",
          Name: "aaudee mamayuy",
          Tel: "087-1235088",
          Code_Product: "051203",
          Name_Product: "Hp black",
        },
        {
          Date: "2022-08-06",
          Name: "aaudee mamayuy",
          Tel: "087-1235088",
          Code_Product: "051203",
          Name_Product: "Hp black",
        },
        {
          Date: "2022-08-06",
          Name: "aaudee mamayuy",
          Tel: "087-1235088",
          Code_Product: "051203",
          Name_Product: "Hp black",
        },
      ],
    };
  },
};
</script>
<style></style>
