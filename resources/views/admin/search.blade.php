@extends('admin.index')

@section('AdminContent')

<div class="content-wrapper" id="app">
    <div v-cloak>
      <div class="container-fluid">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="./">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Search</li>
        </ol>
        <div class="row">
          <div class="col-lg-12">
            
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-search"></i>
                Search Query
              </div>
              <div class="card-body">
                <form v-on:submit.prevent="onSubmit">
                  
                  <div class="form-row" style="border-bottom: 1px solid gray;" v-for="element in elements">
                  
                   <!-- 
                  <div class="form-row" style="border-bottom: 1px solid gray;" >
                    -->
                    <div class="form-group col-md-3">
                      <label for="inputEmail4" class="col-form-label">Field</label>
                        
                      <select class="custom-select" v-bind:name="element.field" v-model="element.fieldVal" style="width: 100% !important" required>
                        
                      <!-- <select class="custom-select" style="width: 100% !important" required> -->
                        <option value="">Choose Field</option>
                        <option v-for="field in fields" v-bind:name="field" :value="field"> <% field.split('.').pop() %> </option>
                      </select>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="inputEmail4" class="col-form-label">Comparision Operator</label>
                        
                      <select class="custom-select" v-bind:name="element.compare" v-model="element.compareVal" style="width: 100% !important" required>
                        
                      <!-- <select class="custom-select" style="width: 100% !important" required> -->
                        <option value="">Choose Comparision Operator</option>
                        <option value="=">Equals to</option>
                        <option value="like">like</option>
                        <option value="<">less than</option>
                        <option value=">">greater than</option>
                      </select>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="inputEmail4" class="col-form-label">Value</label>
                      <input type="text" class="form-control mb-2 mb-sm-0" id="inlineFormInput" placeholder="Value" v-bind:name="element.value" v-model="element.valueVal" required>
                      <!-- <input type="text" class="form-control mb-2 mb-sm-0" id="inlineFormInput" placeholder="Value"  required> -->
                    </div>
                    <div class="form-group col-md-3">
                      <label for="inputEmail4" class="col-form-label">Connector For Multiple Selection</label>
                      <select class="custom-select" style="width: 100% !important" v-bind:name="element.connector" v-on:change="onChange(element.id)" v-model="element.conVal">
                     <!-- 
                      <select class="custom-select" style="width: 100% !important" >
                      -->
                        <option value="">Select Connector</option>
                        <option value="AND">AND</option>
                        <option value="OR">OR</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row" style="margin-top: 5px;">
                    <button class="btn btn-primary" type="submit">Search</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-table"></i>
                Data Table <button class="btn btn-link green-text text-success" style="padding: 0px; float: right;" v-on:click="convert"><i class="fa fa-file-excel-o" aria-hidden="true"></i>  Export As CSV</button>
              </div>
              <div class="card-body" style="overflow-x: scroll;">
                <div class="text text-center" v-if="process"><h4>Searching...</h4></div>
                <div v-if="process==false">
                  <div class="text text-center" v-if="results.length < 1"><h4>No Results</h4></div>
                  
                  <div class="table-responsive" v-if="results.length > 0">
                    <table class="table table-bordered" width="100%"  id="dataTable" cellspacing="0">
                        <thead>
                          <tr>
                            <th v-for="field in fields">  
                                <% fieldFormat(field) %>
                            </th>
                          </tr> 
                        </thead>
                        <tbody>
                          <tr v-for="(item, index) in results">
                            <td v-for="(field, fi) in fields">  
                                <% item[fieldFormat(field)] %>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
            </div> 
        </div>
      </div>
    </div>
    </div>
  </div>
 <script src="https://cdn.jsdelivr.net/vue/latest/vue.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.2/axios.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
 <script type="text/javascript">
   $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
 </script>
 <script type="text/javascript">
  
      var app = new Vue({
        el: '#app',
        delimiters : ['<%', '%>'],
        data: {
            elements: [],
            fields:[],
            results:[],
            process:false,
        },
        created:function () {
          var self=this;
          this.add();
          $.get("/api/getFields",function(schema){
              schema.user = schema.user.map(function (elm) {
                  return 'users.'+ elm
              })
              schema.marks = schema.marks.map(function (elm) {
                  return 'marks.'+ elm
              })
              self.fields = schema.user.concat( schema.marks );
          });
        },
        methods:{
          add:function () {
            var self =this;
            var newL = self.elements.length + 1;
            self.elements.push({
              id: newL,
              field: "field" + newL,
              fieldVal:"",
              compare: "compare" + newL,
              compareVal:"",
              value: "value" + newL,
              valueVal:"",
              connector: "connector" + newL,
              conVal: ""
            });
          },
          log:function (argument) {
              console.log(argument);
              return argument;
          },
          fieldFormat:function (arg) {
            return arg.toString().split('.').pop() 
          },
          onChange:function (e) {
            var self= this;
            if (self.elements[e-1].conVal != "") {
              if (e == self.elements.length) {
                self.add();
              }
            }else{
              var n= self.elements.length - e;
              for (var i = 0; i <n; i++) {
                self.elements.pop();
              }
            }
          },
          onSubmit:function () {
            var self = this;
            self.process=true;
            var string="";
            for (var i = 0; i < self.elements.length; i++) {
                // console.log(self.elements[i]);

              var string = string + self.elements[i].fieldVal;
              var string = string + " " +self.elements[i].compareVal;
              var string = string + " '" +self.elements[i].valueVal+"'";
              var string = string + " "+self.elements[i].conVal+" ";

            }
            // console.log(string);

            $.post('/api/getResults', {'_token':$('[name=csrf-token]').attr('content'), q:string},
             function (response) {
                // console.log(response);
                self.results=response;
                self.process=false;
             })
          },
          convert:function () {
            var self=this;
            JSONToCSVConvertor(self.results,"List",true);
          }
        },
      });

 </script>

@endsection()