import type { PlanType, TimelineType } from '@/views/pages/components/types'

export const pricingPlans: PlanType[] = [
  {
    name: 'Free Pack',
    price: 0,
    period: 'Month',
    features: ['5 GB Storage', '100 GB Bandwidth', '1 Domain', 'No Support', '24x7 Support', '1 User'],
    button: {
      text: 'Get Started',
      enabled: true
    }
  },
  {
    name: 'Professional Pack',
    price: 19,
    period: 'Month',
    ribbon: 'Popular',
    features: ['50 GB Storage', '900 GB Bandwidth', '2 Domains', 'Email Support', '24x7 Support', '5 Users'],
    button: {
      text: 'Current Plan',
      enabled: false
    }
  },
  {
    name: 'Business Pack',
    price: 29,
    period: 'Month',
    features: ['500 GB Storage', '2.5 TB Bandwidth', '5 Domains', 'Email Support', '24x7 Support', '10 Users'],
    button: {
      text: 'Get Started',
      enabled: true
    }
  },
  {
    name: 'Enterprise Pack',
    price: 49,
    period: 'Month',
    features: ['2 TB Storage', 'Unlimited Bandwidth', '50 Domains', 'Email Support', '24x7 Support', 'Unlimited Users'],
    button: {
      text: 'Get Started',
      enabled: true
    }
  }
]

export const timelineData: TimelineType[] = [
  {
    date: 'Today',
    events: [
      {
        side: 'left',
        title: 'Completed UX design project for our client',
        badge: 'important',
        description: 'Dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?'
      },
      {
        side: 'right',
        title: 'Yes! We are celebrating our first admin release.',
        description: 'Consectetur adipisicing elit. Iusto, optio, dolorum John deon provident.'
      },
      {
        side: 'left',
        title: 'We released new version of our theme.',
        description: '3 new photo Uploaded on facebook fan page'
      }
    ]
  },
  {
    date: 'Yesterday',
    events: [
      {
        side: 'right',
        title: 'We have archieved 25k sales in our themes',
        description: 'Dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?'
      },
      {
        side: 'left',
        title: 'Yes! We are celebrating our first admin release.',
        description: 'Outdoor visit at California State Route 85 with John Boltana & Harry Piterson.'
      }
    ]
  }
]
