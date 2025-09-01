export type ButtonType = {
  text: string
  enabled: boolean
}
export type PlanType = {
  name: string
  price: number
  period: string
  ribbon?: string
  features: string[]
  button: ButtonType
}

export type EventType = {
  side?: string
  title: string
  badge?: string
  description: string
}
export type TimelineType = {
  date: string
  events: EventType[]
}
