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
                    <div class="form-group col-md-3">
                      <label for="inputEmail4" class="col-form-label">Field</label>
                      <select class="custom-select" v-bind:name="element.field" v-model="element.fieldVal" style="width: 100% !important" required>
                        <option value="">Choose Field</option>
                        <option v-for="field in fields" v-bind:name="field">  </option>
                      </select>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="inputEmail4" class="col-form-label">Comparision Operator</label>
                      <select class="custom-select" v-bind:name="element.compare" v-model="element.compareVal" style="width: 100% !important" required>
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
                    </div>
                    <div class="form-group col-md-3">
                      <label for="inputEmail4" class="col-form-label">Connector For Multiple Selection</label>
                      <select class="custom-select" style="width: 100% !important" v-bind:name="element.connector" v-on:change="onChange(element.id)" v-model="element.conVal">
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
                Data Table <button class="btn btn-link" style="padding: 0px; float: right;" v-on:click="convert"><i class="fa fa-file-excel-o" aria-hidden="true"></i>  Export As CSV</button>
              </div>
              <div class="card-body" style="overflow-x: scroll;">
                <div class="text text-center" v-if="process"><h4>Searching...</h4></div>
                <div v-if="process==false">
                  <div class="text text-center" v-if="results.length < 1"><h4>No Results</h4></div>
                  
                  <div class="table-responsive" v-if="results.length > 0">
                    <table class="table table-bordered" width="100%"  id="dataTable" cellspacing="0">
                        <thead>
                          <tr>
                            <th v-for="field in fields">  </th>
                          </tr> 
                        </thead>
                        <tbody>
                          <tr v-for="result in results">
                            <td v-for="field in fields">  </td>
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

@endsection()