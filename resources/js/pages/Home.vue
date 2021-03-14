<template>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">T-Shirt pack size</div>
          <div class="card-body">
            <div class="input-group mb-3">
              <input type="text" class="form-control"
                placeholder="Qty"
                aria-describedby="calPackSizeBtn"
                v-model="inputQty"
                v-on:keyup.enter="inputQtyOnEnter">
              <div class="input-group-append" id="calPackSizeBtn">
                <button class="btn btn-outline-secondary"
                  type="button"
                  @click="calPackSize">
                  Calculate pack size
                </button>
              </div>
            </div>
            <ul class="list-group">
              <li class="list-group-item"
                v-for="(qty, size) in packSize"
                v-bind:key="size">
                <span>{{ size }} x {{ qty }}</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script src="./Home.js"></script>
