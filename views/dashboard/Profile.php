<style>
    
.container_pro {
    height: 500px;
    width: 300px;
    box-shadow: 0 10px 20px black;
    background-size: cover;
    justify-content: center;
    align-items: center;
    text-align: center;
    overflow: hidden;
    font-family: 'Abel', sans-serif;
    border-radius:10px;
    
}

.image {
    height: 150px;
    width: 150px;
    background-size: cover;
    border-radius: 50%;
    border: 8px solid white;
    position: relative;
    top: 180px;
    margin-left: 150px;
    box-shadow: 0 2px 15px rgb(58, 54, 54);
    transform: rotate(-20deg);
}

.shape {
    height: 250px;
    width: 400px;
    background-color: #006622;
    margin-left: -20px;
    position: relative;
    top: -80px;
    box-shadow: 0 2px 15px black;
    transform: rotate(25deg);
}

h3 {
    padding-top:13px;
    font-family: 'Montserrat', sans-serif;
}

.title {
    margin-bottom: 10px;
    color: rgb(105, 100, 109);
}

p {
    padding-left: 30px;
    padding-right: 30px;
    color: rgb(105, 100, 109);
}

.btnn {
  background-color: #006622;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
}

/* Darker background on mouse-over */
.btnn:hover {
  background-color: #00cc99;
}
    </style>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-9">
            <div class="card p-4 shadow-sm">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="product-tab" data-bs-toggle="tab" data-bs-target="#product"
                            type="button" role="tab" aria-controls="product" aria-selected="true">
                            Product Details
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="campsite-tab" data-bs-toggle="tab" data-bs-target="#campsite"
                            type="button" role="tab" aria-controls="campsite" aria-selected="false">
                            Campsite Details
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active bg-white p-4" id="product" role="tabpanel"
                        aria-labelledby="product-tab">
                        <!-- Tab 1 -->
                        <table class="table table-hover text-center my-0" id="ProductsTable">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Tags</th>
                                    <th>Ratings</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="product_{{product['pid']}}">
                                    <td class="d-flex justify-content-start">
                                        <a href="products/{{product['pid']}}"><img class="me-2" width="30" height="30"
                                                src="{{product['productImg']}}" />{{product['productName']}}</a>
                                    </td>
                                    <td>
                                        <span class="d-flex justify-content-start">{{product['tags']}}</span>
                                    </td>
                                    <td>{{product['rating']}}</td>
                                    <td>{{product['mPrice']}}</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Product</th>
                                    <th>Tags</th>
                                    <th>Ratings</th>
                                    <th>Price</th>
                                </tr>
                            </tfoot>
                        </table>
                        <!-- Tab 1 -->
                    </div>
                    <div class="tab-pane fade bg-white  p-4" id="campsite" role="tabpanel"
                        aria-labelledby="campsite-tab">
                        <!-- Tab 2 -->
                        <table class="table table-hover text-center my-0" id="CampsiteTable">
                            <thead>
                                <tr>
                                    <th>Camp Name</th>
                                    <th>Facilities</th>
                                    <th>Tehicle</th>
                                    <th>Entry Fee</th>
                                    <th>Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="campsite_{{campsite['cid']}}">
                                    <td class="d-flex justify-content-start">
                                        <a href="campsite/{{campsite['cid']}}"><img class="rounded-circle me-2"
                                                width="30" height="30"
                                                src="{{campsite['campsiteImg']}}" />{{campsite['campsiteName']}}</a>
                                    </td>
                                    <td>
                                        <span class="badge bg-primary">{{act}}</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-primary">{{act}}</span>
                                    </td>
                                    <td>
                                        <span class="d-flex justify-content-start">{{campsite['entryFee']}}</span>
                                    </td>
                                    <td>{{campsite['address']}}</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Camp Name</th>
                                    <th>Facilities</th>
                                    <th>Tehicle</th>
                                    <th>Entry Fee</th>
                                    <th>Address</th>
                                </tr>
                            </tfoot>
                        </table>
                        <!-- Tab 2 -->
                    </div>
                </div>
                <!-- <hr> -->

            </div>
        </div>
        <div class="col-md-3">
                    <div class="container_pro">
                        <div class="shape">
                            <div class="image" style="background-image: url('<?=URLROOT?>/public/images/gandu.jpeg');"></div>
                        </div>
                        <h3>Reshav Sahani</h3>
                        <h3 class="title">Full Stack developer</h3>
                        <p>Web Designer,UI designer,photographer,web developer,etc</p>
                        
                        <button class="btnn" style="width:100%">Update</button>
                    </div>
                </div>
            </div>

</div>
<script>
$(document).ready(function() {
    $('#ProductsTable').DataTable();
    $('#CampsiteTable').DataTable();
});
</script>