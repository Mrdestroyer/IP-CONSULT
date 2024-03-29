<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IP CONSULT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/mi.css">
</head>
<body>
    <nav class="navbar navbar-primary bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" style="color: black;">IP-CONSULT</a>
          <!--<form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>-->
        </div>
      </nav>
    
      <div class="container mt-5 centrado">
            <div class="row">
                <div class="col">
                    <h1>Consulta direccion IP</h1>
                </div>
            </div>
      </div>

      <div class="container mt-2">
        <div class="row">
            
          <div class="col">
            <div class="form-control">
              <label for="ip" name="ip" >Direccion IP</label>
              <input type="text" id="ip" name="ip" class="form-control">
              <button type="button" class="btn btn-success btn-lg " id="btn_consulta">Consultar</button>
            </div>
          </div>

        </div>

        <div id="contenido" class="mt-2">
          <h2>Data</h2>
          
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col"></th>
                
              </tr>
            </thead>

            <tbody>

              <tr>
                <th scope="row">CONTINENTE:</th>
                <td id="continente"></td>
              </tr>

              <tr>
                <th scope="row">PAIS:</th>
                <td id="pais"></td>
              </tr>

              <tr>
                <th scope="row">CIUDAD:</th>
                <td id="ciudad"></td>
              </tr>

              <tr>
                <th scope="row">CAPITAL:</th>
                <td id="capital"></td>
              </tr>

              <tr>
                <th scope="row">CODIGO:</th>
                <td id="codigo"></td>
              </tr>

              <tr>
                <th scope="row">BANDERA:</th>
                <td><img src="" id="bandera" style="height: 50px;"></td>
              </tr>

              <tr>
                <th scope="row">PREFIJO:</th>
                <td id="prefijo"></td>
              </tr>

              <tr>
                <th scope="row">MONEDA:</th>
                <td id="moneda"></td>
              </tr>
      
              <tr>
                <th scope="row">ISP:</th>
                <td  id="isp"></td>
              </tr>

              <tr>
                <th scope="row">REGION:</th>
                <td  id="region"></td>
              </tr>

              <tr>
                <th scope="row">ORGANIZACION:</th>
                <td  id="organizacion"></td>
              </tr>

              <tr>
                <th scope="row">ZONA HORARIA:</th>
                <td  id="zona_horaria"></td>
              </tr>
              
            </tbody>

          </table>


        </div>
      </div>


    
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>    
<script src="./js/mi.js"></script>  
</body>
</html>