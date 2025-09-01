export type TransactionsType = {
  id: string;
  buyer: {
    img: string;
    name: string;
  };
  invoice: string;
  date: string;
  amount: number;
  paymentMethod: 'mastercard' | 'visa' | 'paypal';
  status: 'completed' | 'cancel' | 'pending';
};