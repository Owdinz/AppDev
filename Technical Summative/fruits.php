<?php
$fruits = [
    [
        'name' => 'Apple',
        'image' => 'data:image/jpeg;base64,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',
        'description' => 'A sweet red fruit.',
        'facts' => 'Apples are high in fiber and vitamin C.'
    ],
    [
        'name' => 'Banana',
        'image' => 'https://www.allrecipes.com/thmb/jYmw-0Vijg1E_OuG2yGjEAcdQg4=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/ar-new-banana-adobe-ar-4x3-d8f0871e12214350be7ae5575eea4eed.jpg',
        'description' => 'A long yellow fruit.',
        'facts' => 'Bananas are a good source of potassium.'
    ],
    [
        'name' => 'Cherry',
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQAgYj6E7lTGEe1mxmJ-xs0cYA9EJRbcZbC0A&s',
        'description' => 'A small red fruit.',
        'facts' => 'Cherries are rich in antioxidants.'
    ],
    [
        'name' => 'Grapes',
        'image' => 'https://img.livestrong.com/-/clsd/getty/82965f93904649bba70ac8577b9335b5.jpg',
        'description' => 'A small round fruit that grows in bunches.',
        'facts' => 'Grapes can be red, green, or black and are often used to make wine.'
    ],
    [
        'name' => 'Orange',
        'image' => 'https://m.media-amazon.com/images/I/51qFSdheDPL._AC_UF1000,1000_QL80_.jpg',
        'description' => 'A round citrus fruit with a tough skin.',
        'facts' => 'Oranges are an excellent source of vitamin C.'
    ],
    [
        'name' => 'Pineapple',
        'image' => 'https://5aday.co.nz/assets/site/fruit-and-vegetables/_articleHero/Pineapple.jpg',
        'description' => 'A tropical fruit with a spiky exterior and sweet interior.',
        'facts' => 'Pineapples contain bromelain, an enzyme that can help with digestion.'
    ],
    [
        'name' => 'Strawberry',
        'image' => 'https://snaped.fns.usda.gov/sites/default/files/seasonal-produce/2018-05/strawberries.jpg',
        'description' => 'A red fruit with tiny seeds on its surface.',
        'facts' => 'Strawberries are the only fruit with seeds on the outside.'
    ],
    [
        'name' => 'Watermelon',
        'image' => 'https://scitechdaily.com/images/Sliced-Watermelon.jpg',
        'description' => 'A large fruit with a green rind and red, juicy flesh.',
        'facts' => 'Watermelons are about 92% water, making them very hydrating.'
    ],
    [
        'name' => 'Mango',
        'image' => 'https://kidsstoppress.com/wp-content/uploads/2022/04/MANGOES.jpg',
        'description' => 'A sweet tropical fruit with a smooth skin.',
        'facts' => 'Mangoes are often called the "king of fruits" due to their popularity.'
    ],
    [
        'name' => 'Peach',
        'image' => 'https://img.lb.wbmdstatic.com/vim/live/webmd/consumer_assets/site_images/articles/health_tools/the_health_benefits_of_peaches_slideshow/thinkstock_rf_peaches.jpg?resize=728px:*&output-quality=75',
        'description' => 'A soft fruit with a fuzzy skin and sweet flesh.',
        'facts' => 'Peaches are a good source of vitamins A and C.'
    ]
];
