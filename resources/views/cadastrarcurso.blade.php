@include('menu');

        <div class="content-body">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="breadcrumb-range-picker">
                        <span><i class="icon-calender"></i></span>
                        <span class="ml-1">@if(session('msg')) {{ session('msg') }} @endif</span>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Cadastrar novo curso:</h4>
                                <div class="form-validation" id="app">
                                    <form class="form-valide" action="{{ route('curso.create') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label">Código <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="codigo" placeholder="Código do Curso" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label">Nome do Curso <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="nome" placeholder="Nome Completo" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-8 ml-auto">
                                                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        
    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js'></script>
    <script>
var app = new Vue({
  el: "#app",
  data: {
    rua: "",
    bairro: "",
    cidade: "",
    estado: "",
    cep: "",
    error: "" },

  methods: {
    getCity: function () {
      var self = this;
      $.getJSON("https://viacep.com.br/ws/" + this.cep + "/json", function (result) {
        if ("erro" in result) {
          self.rua = "";
          self.bairro = "";
          self.cidade = "";
          self.estado = "";
          document.getElementById('error').innerHTML = "Não encontrado!";
        } else {
          document.getElementById('rua').value = result.logradouro;
          document.getElementById('bairro').value = result.bairro;
          document.getElementById('cidade').value = result.localidade;
          document.getElementById('estado').value = result.uf;
          document.getElementById('complemento').value = result.complemento;
          document.getElementById('error').innerHTML = "";
        }
        console.log(result);
      });
    } },

  watch: {
    cep: function () {
      if (this.cep.length === 8) {
        this.getCity();
        this.error = "";
      }
      if (this.cep.length < 8) {
        this.city = "";
        this.error = "Pesquisando...";
        document.getElementById('error').innerHTML = "Pesquisando...";
      }
    } },

  mounted: function () {
    this.getCity();
  } });
    </script>

@include('rodape');