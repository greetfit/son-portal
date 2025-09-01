<template>
  <VerticalLayout>
    <PageTitle title="FAQs" subtitle="Pages" />
    <b-row class="g-xl-4">
      <b-col xl="6">
        <h4 class="mb-3 fw-semibold fs-16">General</h4>
        <b-accordion id="accordionExample" class="mt-3" free>
          <b-accordion-item button-class="fw-medium" title="Can I use Dummy FAQs for my website or project?" visible> Yes, you can use Dummy FAQs to populate your website or project during development or testing phases. They help simulate the appearance and functionality of a real FAQ section without requiring actual content. </b-accordion-item>
          <b-accordion-item button-class="fw-medium" title="Are Dummy FAQs suitable for customer support purposes?"> While Dummy FAQs can be used internally for training customer support teams, they are not suitable for public-facing customer support. Real FAQs should be based on genuine customer inquiries to provide accurate and helpful information. </b-accordion-item>
          <b-accordion-item button-class="fw-medium" title="Do Dummy FAQs require attribution?"> No, Dummy FAQs do not require attribution since they are not based on real questions or contributed by individuals. You can use them freely for internal testing or demonstration purposes. </b-accordion-item>
        </b-accordion>

        <h4 class="mb-3 mt-4 fw-semibold fs-16">Refunds</h4>
        <b-accordion id="accordionExample" class="mt-3" free>
          <b-accordion-item button-class="fw-medium" title="How do I request a refund?" visible> To request a refund, simply contact our customer support team through email or phone and provide details about your purchase and reason for the refund. Our representatives will guide you through the process. </b-accordion-item>
          <b-accordion-item button-class="fw-medium" title="What is the refund policy?"> Our refund policy allows customers to request a refund within 30 days of purchase for eligible products or services. Certain restrictions may apply, so it's essential to review the terms and conditions specific to your purchase. </b-accordion-item>
          <b-accordion-item button-class="fw-medium" title="How long does it take to process a refund?"> Refunds are typically processed within 3-5 business days after the request is approved. However, it may take longer depending on the payment method and financial institution involved. </b-accordion-item>
        </b-accordion>
      </b-col>

      <b-col xl="6">
        <h4 class="mb-3 fw-semibold fs-16">Payments</h4>
        <b-accordion id="accordionExample" class="mt-3" free>
          <b-accordion-item button-class="fw-medium" title="Can I test my website/app with Dummy Payments?" visible> Yes, Dummy Payments are commonly used by developers and businesses to test the functionality of e-commerce platforms, mobile apps, and payment gateways. They help identify and resolve issues without risking real transactions. </b-accordion-item>
          <b-accordion-item button-class="fw-medium" title="Are Dummy Payments secure?"> Dummy Payments used in controlled environments for training or demonstration purposes are generally secure. However, it's crucial not to confuse them with real transactions and avoid entering genuine financial information. </b-accordion-item>
          <b-accordion-item button-class="fw-medium" title="How can I differentiate between a Dummy Payment and a real one?"> Real payments involve the transfer of actual funds, resulting in a change in financial balances. Dummy Payments, on the other hand, do not involve any monetary exchange and are typically labeled or indicated as test transactions. Always verify the authenticity of transactions before proceeding with any action. </b-accordion-item>
        </b-accordion>

        <h4 class="mb-3 mt-4 fw-semibold fs-16">Support</h4>
        <b-accordion id="accordionExample" class="mt-3" free>
          <b-accordion-item button-class="fw-medium" title="How do I contact customer support?" visible> You can contact our customer support team via email, phone, or live chat. Our representatives are available to assist you during business hours, Monday through Friday. </b-accordion-item>
          <b-accordion-item button-class="fw-medium" title="Is customer support available 24/7?"> Our customer support is available during regular business hours, Monday through Friday. However, you can leave us a message outside of these hours, and we'll respond to you as soon as possible. </b-accordion-item>
          <b-accordion-item button-class="fw-medium" title="How long does it take to receive a response from customer support?"> We strive to respond to all customer inquiries within 24 hours during regular business hours. Response times may vary depending on the volume of inquiries received. </b-accordion-item>
        </b-accordion>
      </b-col>
    </b-row>

    <b-row class="my-5">
      <b-col cols="12" class="text-center">
        <h4>Can't find a questions?</h4>
        <b-button type="button" variant="success" class="mt-2">
          <i class="bx bx-envelope me-1"></i>
          Email us your question
        </b-button>
        <b-button type="button" variant="info" class="mt-2 ms-1">
          <i class="bx bxl-twitter me-1"></i>
          Send us a tweet
        </b-button>
      </b-col>
    </b-row>
  </VerticalLayout>
</template>
<script setup lang="ts">
import VerticalLayout from '@/layouts/VerticalLayout.vue'
import PageTitle from "@/components/PageTitle.vue";
</script>
