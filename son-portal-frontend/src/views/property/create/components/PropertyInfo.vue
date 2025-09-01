<template>
  <b-card no-body>
    <b-card-header>
      <b-card-title>Property Information</b-card-title>
    </b-card-header>
    <b-card-body>
      <b-row>
        <b-col lg="6">
          <b-form>
            <b-form-group class="mb-3" label="Property Name" label-for="property-name">
              <b-form-input id="property-name" type="text" placeholder="Name" />
            </b-form-group>
          </b-form>
        </b-col>
        <b-col lg="6">
          <b-form>
            <ChoicesSelect id="property-categories" label="Property Categories">
              <option value="Villas">Villas</option>
              <option value="Residences">Residences</option>
              <option value="Bungalow">Bungalow</option>
              <option value="Apartment">Apartment</option>
              <option value="Penthouse">Penthouse</option>
            </ChoicesSelect>
          </b-form>
        </b-col>
        <b-col lg="4">
          <b-form>
            <b-form-group class="mb-3" label="Price" label-for="property-price">
              <div class="input-group mb-3">
                <span class="input-group-text fs-20 px-2 py-0"><i class="ri-money-dollar-circle-line"></i></span>
                <b-form-input id="property-price" type="number" placeholder="000" />
              </div>
            </b-form-group>
          </b-form>
        </b-col>
        <b-col lg="4">
          <ChoicesSelect id="property-for" label="Property For">
            <option value="Sale">Sale</option>
            <option value="Rent">Rent</option>
            <option value="Other">Other</option>
          </ChoicesSelect>
        </b-col>
        <b-col lg="4">
          <b-form>
            <b-form-group class="mb-3" label="Bedroom" label-for="property-bedroom">
              <div class="input-group mb-3">
                <span class="input-group-text fs-20">
                  <Icon icon="solar:bed-broken" class="align-middle" />
                </span>
                <b-form-input id="property-bedroom" type="number" placeholder="" />
              </div>
            </b-form-group>
          </b-form>
        </b-col>
        <b-col lg="4">
          <b-form>
            <b-form-group class="mb-3" label="Bathroom" label-for="property-bathroom">
              <div class="input-group mb-3">
                <span class="input-group-text fs-20">
                  <Icon icon="solar:bath-broken" class="align-middle" />
                </span>
                <b-form-input id="property-bathroom" type="number" placeholder="" />
              </div>
            </b-form-group>
          </b-form>
        </b-col>
        <b-col lg="4">
          <b-form>
            <b-form-group class="mb-3" label="Square Foot" label-for="property-square-foot">
              <div class="input-group mb-3">
                <span class="input-group-text fs-20">
                  <Icon icon="solar:scale-broken" class="align-middle" />
                </span>
                <b-form-input id="property-square-foot" type="number" placeholder="" />
              </div>
            </b-form-group>
          </b-form>
        </b-col>
        <b-col lg="4">
          <b-form>
            <b-form-group class="mb-3" label="Floor" label-for="property-floor">
              <div class="input-group mb-3">
                <span class="input-group-text fs-20">
                  <Icon icon="solar:double-alt-arrow-up-broken" class="align-middle" />
                </span>
                <b-form-input id="property-floor" type="number" placeholder="" />
              </div>
            </b-form-group>
          </b-form>
        </b-col>
        <b-col lg="12">
          <b-form>
            <b-form-group class="mb-3" label="Property Address" label-for="property-address">
              <b-form-textarea id="property-address" rows="3" placeholder="Enter address" />
            </b-form-group>
          </b-form>
        </b-col>
        <b-col lg="4">
          <b-form>
            <b-form-group class="mb-3" label="Zip-Code" label-for="property-zipcode">
              <b-form-input id="property-zipcode" type="number" placeholder="zip-code" />
            </b-form-group>
          </b-form>
        </b-col>
        <b-col lg="4">
          <b-form>
            <ChoicesSelect id="choices-city" label="City">
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
                <option value="Washington" disabled>
                  Washington
                </option>
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
        </b-col>
        <b-col lg="4">
          <b-form>
            <ChoicesSelect id="choices-country" label="Country">
              <option value="">Choose a country</option>
              <optgroup label="">
                <option value="">United Kingdom</option>
                <option value="Fran">France</option>
                <option value="Netherlands">Netherlands</option>
                <option value="U.S.A">U.S.A</option>
                <option value="Denmark">Denmark</option>
                <option value="Canada">Canada</option>
                <option value="Australia">Australia</option>
                <option value="India">India</option>
                <option value="Germany">Germany</option>
                <option value="Spain">Spain</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
              </optgroup>
            </ChoicesSelect>
          </b-form>
        </b-col>
      </b-row>
    </b-card-body>
  </b-card>
</template>
<script setup lang="ts">
import { Icon } from "@iconify/vue";
</script>