<template>
  <b-card no-body>
    <b-card-header class="border-bottom">
      <div>
        <b-card-title>Properties</b-card-title>
        <p class="mb-0">Show 15,780 Properties</p>
      </div>
    </b-card-header>
    <b-card-body class="border-light">
      <b-form>
        <ChoicesSelect id="choices-single-groups" label="Properties Location">
          <option value="">Choose a city</option>
          <optgroup label="UK">
            <option value="London">London</option>
            <option value="Manchester">Manchester</option>
            <option value="Liverpool">Liverpool</option>
          </optgroup>
          <optgroup label="FR">
            <option value="Paris">Paris</option>
            <option value="Lyon">Lyon</option>
            <option value="Marseille">Marseille</option>
          </optgroup>
          <optgroup label="DE" disabled>
            <option value="Hamburg">Hamburg</option>
            <option value="Munich">Munich</option>
            <option value="Berlin">Berlin</option>
          </optgroup>
          <optgroup label="US">
            <option value="New York">New York</option>
            <option value="Washington" disabled>Washington</option>
            <option value="Michigan">Michigan</option>
          </optgroup>
          <optgroup label="SP">
            <option value="Madrid">Madrid</option>
            <option value="Barcelona">Barcelona</option>
            <option value="Malaga">Malaga</option>
          </optgroup>
          <optgroup label="CA">
            <option value="Montreal">Montreal</option>
            <option value="Toronto">Toronto</option>
            <option value="Vancouver">Vancouver</option>
          </optgroup>
        </ChoicesSelect>
      </b-form>
      <b-form-group class="my-3" label="Type Of Place" label-for="typeplace">
        <b-form-input id="typeplace" type="text" />
      </b-form-group>
      <h5 class="text-dark fw-medium my-3">Custom Price Range :</h5>
      <div id="product-price-range"></div>
      <div class="formCost d-flex gap-2 align-items-center mt-3">
        <input class="form-control form-control-sm text-center" type="text" id="minCost" value="0">
        <span class="fw-semibold text-muted">to</span>
        <input class="form-control form-control-sm text-center" type="text" id="maxCost" value="1000">
      </div>
      <h5 class="text-dark fw-medium my-3">Accessibility Features :</h5>
      <b-row class="g-1">
        <b-col lg="6">
          <div class="mb-2">
            <b-form-checkbox id="checkbox-1"> For Rent </b-form-checkbox>
          </div>
        </b-col>
        <b-col lg="6">
          <div class="mb-2">
            <b-form-checkbox id="checkbox-2"> For Sale </b-form-checkbox>
          </div>
        </b-col>
      </b-row>
      <h5 class="text-dark fw-medium my-3">Properties Type :</h5>
      <b-row class="g-1">
        <b-col lg="6">
          <div class="mb-2">
            <b-form-checkbox id="checkbox-3" checked> All Properties </b-form-checkbox>
          </div>
        </b-col>
        <b-col lg="6">
          <div class="mb-2">
            <b-form-checkbox id="checkbox-4"> Cottage </b-form-checkbox>
          </div>
        </b-col>
        <b-col lg="6">
          <div class="mb-2">
            <b-form-checkbox id="checkbox-5"> Villas </b-form-checkbox>
          </div>
        </b-col>
        <b-col lg="6">
          <div class="mb-2">
            <b-form-checkbox id="checkbox-6"> Apartment </b-form-checkbox>
          </div>
        </b-col>
        <b-col lg="6">
          <div class="mb-2">
            <b-form-checkbox id="checkbox-7"> Duplex Bungalow </b-form-checkbox>
          </div>
        </b-col>
      </b-row>
      <h5 class="text-dark fw-medium my-3">Bedrooms :</h5>
      <b-form-checkbox-group v-model="btnSelected" :options="btnOptions" buttons button-variant="outline-primary"
        name="btncheck" />

      <h5 class="text-dark fw-medium my-3">Accessibility Features :</h5>
      <b-row class="g-1">
        <b-col lg="6">
          <div class="mb-2">
            <b-form-checkbox id="checkbox-8"> Balcony </b-form-checkbox>
          </div>
        </b-col>
        <b-col lg="6">
          <div class="mb-2">
            <b-form-checkbox id="checkbox-9"> Parking </b-form-checkbox>
          </div>
        </b-col>
        <b-col lg="6">
          <div class="mb-2">
            <b-form-checkbox id="checkbox-10"> Spa </b-form-checkbox>
          </div>
        </b-col>
        <b-col lg="6">
          <div class="mb-2">
            <b-form-checkbox id="checkbox-11"> Pool </b-form-checkbox>
          </div>
        </b-col>
        <b-col lg="6">
          <div class="mb-2">
            <b-form-checkbox id="checkbox-12"> Restaurant </b-form-checkbox>
          </div>
        </b-col>
        <b-col lg="6">
          <div class="mb-2">
            <b-form-checkbox id="checkbox-13"> Fitness Club </b-form-checkbox>
          </div>
        </b-col>
      </b-row>
    </b-card-body>
    <b-card-footer>
      <a href="#!" class="btn btn-primary w-100">Apply</a>
    </b-card-footer>
  </b-card>
</template>
<script setup lang="ts">
import { onMounted, ref } from "vue";
import noUiSlider from 'nouislider';

onMounted(() => {
  const multiElementSlider = document.getElementById('product-price-range');
  if (multiElementSlider)
    noUiSlider.create(multiElementSlider, {
      start: [20, 80],
      connect: true,
      range: {
        min: 0,
        max: 100
      }
    });
});

const btnSelected = ref(['3-bhk']);

const btnOptions = [
  { text: '1 BHK', value: '1-bhk' },
  { text: '2 BHK', value: '2-bhk' },
  { text: '3 BHK', value: '3-bhk' },
  { text: '4 & 5 BHK', value: '4&5-bhk' },
];
</script>