import properties1 from "@/assets/images/properties/p-1.jpg"
import properties2 from "@/assets/images/properties/p-2.jpg"
import properties3 from "@/assets/images/properties/p-3.jpg"
import properties4 from "@/assets/images/properties/p-4.jpg"
import properties5 from "@/assets/images/properties/p-5.jpg"
import properties6 from "@/assets/images/properties/p-6.jpg"
import properties7 from "@/assets/images/properties/p-7.jpg"

type PropertyReviewType = {
    property: {
        image: string
        name: string
        address: string
    },
    date: string
    customerName: string
    rating: number
    review: {
        title: string
        comment: string
    },
    status: 'published' | 'pending'
}


export const propertyReviews: PropertyReviewType[] = [
    {
        property: {
            image: properties1,
            name: 'Dvilla Residences Batu',
            address: '390 Main Rd Mandeni'
        },
        date: '15/03/2023',
        customerName: 'Adriana G. Faust',
        rating: 4.5,
        review: {
            title: 'Best For Family Leaving',
            comment: 'The property was exactly as described and the buying process was smooth and hassle-free.'
        },
        status: 'published'
    },
    {
        property: {
            image: properties2,
            name: 'PIK Villa House',
            address: '27 Ireland St Sabie'
        },
        date: '20/03/2023',
        customerName: 'John N. Mazza',
        rating: 3.5,
        review: {
            title: 'Best In Low Price',
            comment: 'Great experience overall, but there were a few delays in communication.'
        },
        status: 'pending'
    },
    {
        property: {
            image: properties3,
            name: 'Tungis Luxury',
            address: '564 Plein St Houtbaai'
        },
        date: '25/03/2023',
        customerName: 'Harold E. Joyce',
        rating: 4.3,
        review: {
            title: 'Agent Is Good',
            comment: 'Fantastic service and very knowledgeable agent. Highly recommend!'
        },
        status: 'published'
    },
    {
        property: {
            image: properties4,
            name: 'Luxury Apartment',
            address: 'Schoeman St Pretoria'
        },
        date: '30/03/2023',
        customerName: 'Robert L. Dale',
        rating: 3.1,
        review: {
            title: 'Renovation Requirement',
            comment: 'Good experience, but the property needed more repairs than expected.'
        },
        status: 'pending'
    },
    {
        property: {
            image: properties5,
            name: 'Weekend Villa MBH',
            address: '95 Stanley Rd Durban'
        },
        date: '05/04/2023',
        customerName: 'Shirley F. Desrosiers',
        rating: 4.4,
        review: {
            title: 'Best Property',
            comment: 'Excellent service! The agent was very helpful and responsive throughout the process.'
        },
        status: 'published'
    },
    {
        property: {
            image: properties6,
            name: 'Luxury Penthouse',
            address: '1936 Broad Rd Orlando'
        },
        date: '10/04/2023',
        customerName: 'Jeffrey G. Mahon',
        rating: 2.5,
        review: {
            title: 'Bed Experience',
            comment: 'Average experience. The property was good, but the process took longer than anticipated.'
        },
        status: 'pending'
    },
    {
        property: {
            image: properties7,
            name: 'Ojiag Duplex Apartment',
            address: '676 Plein St Cape Town'
        },
        date: '15/04/2023',
        customerName: 'John A. Newton',
        rating: 4.5,
        review: {
            title: 'Wonderful Property',
            comment: 'Outstanding service and a wonderful property. Couldn\'t be happier!'
        },
        status: 'published'
    },
]