// module.exports=
// [
//     {
//         path:'/',
//         name:'product.index',
//         component:()=>import('./routes/Products/Index.vue')
//     },
//     {
//         path:'/product/:slug',
//         name:'products.show',
//         component:()=>import('./routes/Products/Show.vue')
//     },
//     {
//         path:'/checkout',
//         name:'order.checkout',
//         component:()=>import('./routes/Orders/Checkout.vue')
//     },
//     {
//         path:'/summary',
//         name:'order.summary',
//         component:()=>import('./routes/Orders/Summary.vue')
//     }


// ];
// import Vue from 'vue'
// import Router from 'vue-router'
// Vue.use(Router);
// export default new Router(
//     {
//         routes:  [
//             {
//                 path: '/',
//                 name: 'products.index',
//                 component: () => import('./routes/Products/Index.vue')
//             },
//             {
//                 path: '/product/:slug',
//                 name: 'products.show',
//                 component: () => import('./routes/Products/Show.vue')
//             },
//             {
//                 path: '/checkout',
//                 name: 'order.checkout',
//                 component: () => import('./routes/Orders/Checkout.vue')
//             },
//             {
//                 path: '/summary',
//                 name: 'order.summary',
//                 component: () => import('./routes/Orders/Summary.vue')
//             }
//         ]
//     }
// )
module.exports = [
    {
        path: '/',
        name: 'products.index',
        component: () => import('./routes/Products/Index.vue')
    },
    {
        path: '/product/:slug',
        name: 'products.show',
        component: () => import('./routes/Products/Show.vue')
    },
    {
        path: '/checkout',
        name: 'order.checkout',
        component: () => import('./routes/Orders/Checkout.vue')
    },
    {
        path: '/summary',
        name: 'order.summary',
        component: () => import('./routes/Orders/Summary.vue')
    }
]

