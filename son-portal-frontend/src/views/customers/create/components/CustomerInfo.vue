<template>
  <b-card no-body>
    <b-card-header>
      <b-card-title>Customer Information</b-card-title>
    </b-card-header>
    <b-card-body>
      <b-row>
        <b-col lg="6">
          <b-form>
            <b-form-group class="mb-3" label="Customer Name" label-for="customer-name">
              <b-form-input id="customer-name" type="text" placeholder="Full Name" />
            </b-form-group>
          </b-form>
        </b-col>
        <b-col lg="6">
          <b-form>
            <b-form-group class="mb-3" label="Customer Email" label-for="customer-email">
              <b-form-input id="customer-email" type="email" placeholder="Enter Email" />
            </b-form-group>
          </b-form>
        </b-col>
        <b-col lg="6">
          <b-form>
            <b-form-group class="mb-3" label="Customer Number" label-for="customer-number">
              <b-form-input id="customer-number" type="number" placeholder="Enter Number" />
            </b-form-group>
          </b-form>

          <form>
            <div class="mb-3">
              <label for="customer-number" class="form-label">Customer Number</label>
              <input type="number" id="customer-number" class="form-control" placeholder="Enter Number">
            </div>
          </form>
        </b-col>
        <b-col lg="6">
          <b-form>
            <b-form-group class="mb-3" label="View Properties" label-for="view-properties">
              <b-form-input id="view-properties" type="number" placeholder="Enter View Properties" />
            </b-form-group>
          </b-form>

          <form>
            <div class="mb-3">
              <label for="view-properties" class="form-label">View Properties</label>
              <input type="number" id="view-properties" class="form-control" placeholder="Enter View Properties">
            </div>
          </form>
        </b-col>
        <b-col lg="6">
          <b-form>
            <b-form-group class="mb-3" label="Own Properties" label-for="own-properties">
              <b-form-input id="own-properties" type="number" placeholder="Enter Own Properties" />
            </b-form-group>
          </b-form>
        </b-col>
        <b-col lg="6">
          <b-form>
            <b-form-group label="Invest Property" label-for="invest-property">
              <div class="input-group mb-3">
                <span class="input-group-text fs-20 px-2 py-0"><i class="ri-money-dollar-circle-line"></i></span>
                <b-form-input id="invest-property" type="number" placeholder="000" />
              </div>
            </b-form-group>
          </b-form>
        </b-col>
        <b-col lg="12">
          <b-form>
            <b-form-group class="mb-3" label="Customer Address" label-for="customer-address">
              <b-form-textarea id="customer-address" rows="3" placeholder="Full address" />
            </b-form-group>
          </b-form>
        </b-col>
        <b-col lg="4">
          <b-form>
            <b-form-group class="mb-3" label="Zip-Code" label-for="agent-name">
              <b-form-input id="agent-name" type="text" placeholder="Full Name" />
            </b-form-group>
          </b-form>
        </b-col>
        <b-col lg="4">
          <div class="mb-3">
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
          </div>
        </b-col>
        <b-col lg="4">
          <div class="mb-3">
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
          </div>
        </b-col>
        <b-col lg="4">
          <b-form>
            <b-form-group class="mb-3" label="Facebook URL" label-for="facebook-url">
              <b-form-input id="facebook-url" type="url" placeholder="Enter URL" />
            </b-form-group>
          </b-form>
        </b-col>
        <b-col lg="4">
          <b-form>
            <b-form-group class="mb-3" label="Instagram URL" label-for="instagram-url">
              <b-form-input id="instagram-url" type="url" placeholder="Enter URL" />
            </b-form-group>
          </b-form>
        </b-col>
        <b-col lg="4">
          <b-form>
            <b-form-group class="mb-3" label="Twitter URL" label-for="twitter-url">
              <b-form-input id="twitter-url" type="url" placeholder="Enter URL" />
            </b-form-group>
          </b-form>
        </b-col>
        <b-col lg="4">
          <div class="mb-3">
            <b-form>
              <ChoicesSelect id="choices-status" label="Status">
                <option value="">Choose a Status</option>
                <optgroup label="">
                  <option value="">Available</option>
                  <option value="Fran">Unavailable</option>
                </optgroup>
              </ChoicesSelect>
            </b-form>
          </div>
        </b-col>
      </b-row>
    </b-card-body>
  </b-card>
</template>
<script setup lang="ts">
</script>