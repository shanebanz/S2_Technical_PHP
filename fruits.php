<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Fruits Directory</title>
    <link rel="stylesheet" href="fruit-style.css">
</head>
<body>
    <?php
        $fruits = [
            [
                'name' => 'Apple',
                'image' => 'https://images.unsplash.com/photo-1560806887-1e4cd0b6cbd6?w=150&h=150&fit=crop',
                'description' => 'Red/Green',
                'facts' => 'Apples are deciduous trees generally standing 2-4.5 meters tall in cultivation. They are rich in fiber and vitamin K, with lower glycemic index compared to many fruits. Contains antioxidants and helps support heart health.'
            ],
            [
                'name' => 'Banana',
                'image' => 'https://images.unsplash.com/photo-1571771894821-ce9b6c11b08e?w=150&h=150&fit=crop',
                'description' => 'Color Yellow',
                'facts' => 'Bananas are rich in potassium, magnesium, manganese, vitamins C, B6, A, and folate. They are eaten raw or cooked worldwide, with no sharp distinction between dessert bananas and cooking plantains in many regions.'
            ],
            [
                'name' => 'Cherry',
                'image' => 'https://images.unsplash.com/photo-1528821128474-27f963b062bf?w=150&h=150&fit=crop',
                'description' => 'Color Red',
                'facts' => 'Cherries are stone fruits rich in antioxidants, particularly anthocyanins which give them their red color. They contain vitamin C, potassium, and melatonin, which may help improve sleep quality and reduce inflammation.'
            ],
            [
                'name' => 'Grape',
                'image' => 'https://images.unsplash.com/photo-1537640538966-79f369143f8f?w=150&h=150&fit=crop',
                'description' => 'Purple/Green',
                'facts' => 'Grapes contain resveratrol, a powerful antioxidant found in the skin. They are rich in vitamin C, vitamin K, and potassium. Grapes support heart health and may help protect against certain types of cancer.'
            ],
            [
                'name' => 'Kiwi',
                'image' => 'https://images.unsplash.com/photo-1585059895524-72359e06133a?w=150&h=150&fit=crop',
                'description' => 'Brown/Green',
                'facts' => 'Kiwifruit contains exceptionally high levels of vitamin C (80-120mg per 100g), more than oranges. Rich in potassium, phosphorus, copper, manganese, and vitamins E and K. The fuzzy skin is edible and nutritious.'
            ],
            [
                'name' => 'Mango',
                'image' => 'https://shopmetro.ph/mandaluyong-supermarket/wp-content/uploads/2021/11/SM13560-2.jpg',
                'description' => 'Orange/Yellow',
                'facts' => 'Mangoes are rich in vitamin A, vitamin C, and folate. They contain enzymes that aid in digestion and are an excellent source of beta-carotene. One mango provides about 118 calories and significant dietary fiber.'
            ],
            [
                'name' => 'Orange',
                'image' => 'https://images.unsplash.com/photo-1580052614034-c55d20bfee3b?w=150&h=150&fit=crop',
                'description' => 'Color Orange',
                'facts' => 'Oranges are higher in calcium, choline, selenium, and vitamins A, B1, B2, B5, and folate compared to many fruits. They are excellent sources of vitamin C and flavonoids that support immune system function.'
            ],
            [
                'name' => 'Pineapple',
                'image' => 'https://images.unsplash.com/photo-1550258987-190a2d41a8ba?w=150&h=150&fit=crop',
                'description' => 'Golden Yellow',
                'facts' => 'Pineapples contain bromelain, an enzyme that aids protein digestion and has anti-inflammatory properties. They are rich in vitamin C, manganese, and thiamine. Historically grown in tropical "banana republics".'
            ],
            [
                'name' => 'Strawberry',
                'image' => 'https://images.unsplash.com/photo-1464965911861-746a04b4bca6?w=150&h=150&fit=crop',
                'description' => 'Color Red',
                'facts' => 'Strawberries are packed with vitamin C, manganese, and antioxidants called anthocyanins. They are low in calories and high in water content. Contains ellagic acid which may have anti-cancer properties.'
            ],
            [
                'name' => 'Watermelon',
                'image' => 'https://www.frutas-hortalizas.com/img/fruites_verdures/presentacio/30.jpg',
                'description' => 'Green/Red',
                'facts' => 'Watermelons are 92% water, making them excellent for hydration. They contain lycopene, a powerful antioxidant that gives the red color. Rich in vitamins A and C, and contains citrulline which may benefit heart health.'
            ]
        ];
    ?>
    <div class="container">
        <table class="fruit-table">
            <thead>
                <tr>
                    <th colspan="4" class="main-header">My Fruits</th>
                </tr>
                <tr class="sub-header">
                    <th class="image-header">Image</th>
                    <th class="name-header">Name</th>
                    <th class="desc-header">Description</th>
                    <th class="facts-header">Facts</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($fruits as $fruit): ?>
                <tr>
                    <td class="image-cell">
                        <img src="<?php echo htmlspecialchars($fruit['image']); ?>" 
                             alt="<?php echo htmlspecialchars($fruit['name']); ?>" 
                             class="fruit-image">
                    </td>
                    <td class="name-cell">
                        <?php echo htmlspecialchars($fruit['name']); ?>
                    </td>
                    <td class="desc-cell">
                        <?php echo htmlspecialchars($fruit['description']); ?>
                    </td>
                    <td class="facts-cell">
                        <?php echo htmlspecialchars($fruit['facts']); ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>