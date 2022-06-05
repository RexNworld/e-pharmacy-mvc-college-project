{% extends "base.html" %} {% block title %}{{title}}{% endblock %} {% block
content %}
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
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
                    <div class="tab-pane fade show active p-4" id="product" role="tabpanel"
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
                                {% for product in products %}
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
                                {% endfor %}
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
                    <div class="tab-pane fade p-4" id="campsite" role="tabpanel" aria-labelledby="campsite-tab">
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
                                {% for campsite in campsites %}
                                <tr id="campsite_{{campsite['cid']}}">
                                    <td class="d-flex justify-content-start">
                                        <a href="campsite/{{campsite['cid']}}"><img class="rounded-circle me-2"
                                                width="30" height="30"
                                                src="{{campsite['campsiteImg']}}" />{{campsite['campsiteName']}}</a>
                                    </td>
                                    <td>
                                        {% for act in campsite['facilities'] %}
                                        <span class="badge bg-primary">{{act}}</span>
                                        {% endfor %}
                                    </td>
                                    <td>
                                        {% for act in campsite['vehicleTypes'] %}
                                        <span class="badge bg-primary">{{act}}</span>
                                        {% endfor %}
                                    </td>
                                    <td>
                                        <span class="d-flex justify-content-start">{{campsite['entryFee']}}</span>
                                    </td>
                                    <td>{{campsite['address']}}</td>
                                </tr>
                                {% endfor %}
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
                <ul class="nav nav-tabs nav-tabs-bottom" id="myTab" role="tablist">
                    <li class="nav-item nav-item-bottom" role="presentation">
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
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4 shadow-sm">
                <!-- <div class="card-header">Something</div> -->
                <div class="card-body">
                    <div style="height: 300px">
                        <img src="https://firebasestorage.googleapis.com/v0/b/noimacki-3dd5f.appspot.com/o/idImages%2F1653425032744774.jpg?alt=media&token=bdafd732-abb9-472e-8857-e5fc85080c1c"
                            alt="Sudip Ghosh" style="width: 100%; height: 100%; object-fit: contain !important" />
                    </div>
                    <div class="text-center">
                        <h3>Sudip Ghosh</h3>
                        <hr />
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        Email@email.com
                        <hr />
                        <i class="fa fa-phone" aria-hidden="true"></i>

                        +91 9614464595
                        <hr />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock content %} {% block customjs %}
<script>
$(document).ready(function() {
    $('#ProductsTable').DataTable();
    $('#CampsiteTable').DataTable();
});
</script>
{% endblock customjs %}