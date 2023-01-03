<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        User::create([
            'name' => 'Dik Dik Nur Illahi',
            'username' => 'Naraka',
            'Email' => 'dikdiknurillahi@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Farhat Aldjaidi',
            'username' => 'Farhat',
            'Email' => 'farhataldjaidi@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'Siti Komalasari',
            'username' => 'Mala',
            'Email' => 'Siti Komalasarig@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'Muhammad Fazril',
            'username' => 'Aril',
            'Email' => 'fazril@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'Billy Firdaniel',
            'username' => 'Billy',
            'Email' => 'bfirdaniel@gmail.com',
            'password' => bcrypt('12345')
        ]);


        Category::create([
            'name' => 'Mountain',
            'slug' => 'mountain'
        ]);

        Category::create([
            'name' => 'Waterfall',
            'slug' => 'waterfall'
        ]);

        Category::create([
            'name' => 'Lake',
            'slug' => 'lake'
        ]);

        Category::create([
            'name' => 'Forest',
            'slug' => 'forest'
        ]);


        // Post::factory(20)->create();

        Post::create([
            'title' => 'Curug Tilu Leuwi Opat',
            'category_id' => 2,
            'user_id' => 1,
            'slug' => 'curug-tilu-leuwi-opat',
            'image' => '../img/Waterfall/opat.jpg',
            'excerpt' => 'Curug Tilu leuwi opat, a natural tourist attraction located in the Ciwangun parongpong area of Bandung Regency directly adjacent to pine plantations passed by a river flow that goes to Curug Cimahi from the upper reaches of Lake Situ Lembang. With an area of 5 hectares you can freely enjoy green and beautiful areas',
            'body' => '<p>Curug Tilu leuwi opat, a natural tourist attraction located in the Ciwangun parongpong area of Bandung Regency directly adjacent to pine plantations passed by a river flow that goes to Curug Cimahi from the upper reaches of Lake Situ Lembang. With an area of 5 hectares you can freely enjoy green and beautiful areas. In addition, our location is also often used as a Location for Modeling, Training, learning nature and ancient volcanoes and a location for learning live pharmacies.</p><p>There are many places that can be used by visitors as destinations, Curug and other places with various levels of difficulty. In addition, there are also other outdoor games that can be done in the curug tilu leuwi opat area such as Camping, Outbound, Paint Ball, Rappeling, climbing, rafting and various other activities</p><p>Activities that can be done here in addition to water tourism can also follow outbound activities that are quite complete. Among others; Body rafting, flying fox, banal thump, high rope, two-rope bridge, catching fish, raft, shaking bridge, and so on.</p><p>The traccing route is considered light anyway. Flat, with a slight ups and downs. Nevertheless, you still have to be careful because in some places you will walk over high cliffs without safety. In addition, you will also go down the river, cross with a wooden/bamboo bridge, and a little up and down the cobblestone road. Try to use shoes or sandals that are suitable for the outdoors.</p>'
        ]);

        Post::create([
            'title' => 'Curug Pelangi Cimahi',
            'category_id' => 2,
            'user_id' => 2,
            'slug' => 'curug-pelangi-cimahi',
            'image' => '../img/Waterfall/cimahi.jpg',
            'excerpt' => 'Curug Pelangi Cimahi can be regarded as one of the most beautiful and popular natural tourist destinations in Bandung.',
            'body' => '<p>Curug Pelangi Cimahi can be regarded as one of the most beautiful and popular natural tourist destinations in Bandung. One of the tours that is not only popular in Bandung, but also widely known by tourists from outside the city, is the Cimahi Rainbow Waterfall tour or commonly known as Curug Pelangi.</p><p>Curug Pelangi Cimahi is indeed famous for having a very extraordinary charm, not only presenting waterfalls that flow rapidly from a height, but also the surrounding scenery that looks very green to become a natural natural tourism. In fact, Curug Pelangi Cimahi has been opened for a long time, namely in 1992. In 2010 it was vacuumed due to improvements, and it began to reopen in 2014. Until now, Curug Pelangi Cimahi tourism has become the most popular tourist destination in Bandung.</p><p>The people of Bandung used to know this waterfall by the name of Curug Cimahi, but Perhutani then changed it to Curug Pelangi to add to the attraction of visitors. This step proved successful, many tourists came to enjoy its natural beauty. The height of the waterfall reaches about 87 meters, and makes it the highest waterfall in Bandung.</p><p>In addition, this waterfall is also located at an altitude of 1050 above sea level (masl) with an area of 25 hectares. So that the average temperature in this place ranges from 18-22 degrees Celsius. Because of the cool air, many tourists come to visit. You can enjoy fresh natural water sourced directly from the famous Cimahi River in Bandung.</p>'
        ]);

        Post::create([
            'title' => 'Curug Aseupan',
            'category_id' => 2,
            'user_id' => 3,
            'slug' => 'curug-aseupan',
            'image' => '../img/Waterfall/aseupan.jpg',
            'excerpt' => 'Curug Aseupan is one of the natural waterfalls in Parongpong District, West Bandung. Still included in the tourist area of Curug Tilu Leuwi Opat (C3L4).',
            'body' => '<p>Curug Aseupan is one of the natural waterfalls in Parongpong District, West Bandung. Still included in the tourist area of Curug Tilu Leuwi Opat (C3L4). This waterfall area consists of several waterfalls in a narrow valley</p><p>Indeed, access to the location is quite extreme. Including climbing vertical stairs and crossing bridges at high altitudes. Although it is challenging, it is comparable to the natural beauty that will be obtained.</p><p>The position of the waterfall is indeed very high. To reach it, visitors must climb the surrounding giant rocks. There is a vertical iron staircase to make it easier to reach the top of the rock.</p><p>Next, tourists have to cross the bridge to get to the place where the waterfall falls. Although this bridge is solid, it is quite challenging for adrenaline because it is at an altitude. After passing one more staircase, then you can really enjoy this waterfall up close. Watch the steps and stay careful not to slip.</p><p>Curug Aseupan is included in the tourist area of Curug Tilu Leuwi Opat. Other waterfalls that can be accessed from this tourist spot are Curug Tilu and Curug Layung. However, Curug Aseupan has its own charm. Its position is in a canyon and consists of several streams of waterfalls.</p>'
        ]);

        Post::create([
            'title' => 'Curug Dago',
            'category_id' => 2,
            'user_id' => 4,
            'slug' => 'curug-dago',
            'image' => '../img/Waterfall/dago.jpg',
            'excerpt' => 'Curug Dago is a tufaan stone material like other areas in the Ir. H. Djuanda Forest Park, which was formed from the quaternary period and is the result of the eruption of Mount Tangkuban Perahu',
            'body' => '<p>Curug Dago is a tufaan stone material like other areas in the Ir. H. Djuanda Forest Park, which was formed from the quaternary period and is the result of the eruption of Mount Tangkuban Perahu. Curug Dago has 2 niches resulting from the erosion / erosion of river flows.</p><p>The first niche located near the sungau (relatively youngest) stream is a gravel deposit, while in the second recess the cell is volcanicboulders. The base of the first recess contains a fairly thick layer of soil, while the floor/base is keracal (pebbles).</p><p>Curug Dago is located in the northern part of Bandung City, is a conservation area and is an integral part of the Ir. H. Djuanda Forest Park area. Currently, Curug Dago has a natural view of the forest ecosystem and Sundanese villages on the right and left of the Cikapundung river flow. The beauty of the Cikapundung river waterfall is as high as ±15 meters, equipped with two stone inscriptions left by the Thai kingdom, as well as a cool resting place under the forest trees.</p>'
        ]);

        Post::create([
            'title' => 'Curug Cilengkrang',
            'category_id' => 2,
            'user_id' => 5,
            'slug' => 'curug-cilengkrang',
            'image' => '../img/Waterfall/cilengkrang.jpg',
            'excerpt' => 'Curug Cilengkrang is one of the natural attractions in Bandung. Curug (Sundanese language) means waterfall, while Cilengkrang is taken from the shape of the rock where this waterfall comes from',
            'body' => '<p>Curug Cilengkrang is one of the natural attractions in Bandung. Curug (Sundanese language) means waterfall, while Cilengkrang is taken from the shape of the rock where this waterfall comes from. If in the city you rarely find cool trees to shelter from the heat of the sunburn, in this tourist area you will find the extraordinary natural beauty of Curug Cilengkrang.</p><p>This tourist attraction managed by Perum Perhutani is located at the foot of Mount Manglayang, Cilengkrang Village, Bandung Regency, including in the area of West Java.</p><p>To be able to get to the tourist location at the foot of Mount Manglayang is actually not difficult. The distance of this place from the city of Bandung is about 10 km. In addition to beautiful waterfalls, this tourist attraction also offers a number of natural exoticism that can make you amazed to see it. Shady trees, cool air, melodious sounds of birds, will make you feel at home for a long time enjoying the beauty of the scenery.</p>'
        ]);

        Post::create([
            'title' => 'Gunung Puntang',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'gunung-puntang',
            'image' => '../img/Mountain/puntang.jpg',
            'excerpt' => 'Mount Puntang is located south of the center of Bandung City, about 22 kilometers away',
            'body' => '<p>Mount Puntang is located south of the center of Bandung City, about 22 kilometers away. If the traffic flow is smooth, the travel time is about one to one and a half hours. Mount Puntang is part of the Malabar Mountains. It is located on the northern side of Malabar, with the Campground gate on the northwestern slope.</p><p>The peak of Mount Puntang is right on the border of Campakamulya Village, Cimaung District, with Pasirmulya Village and Mekarjaya Village, Banjaran District, Bandung Regency. The peak height is 2,223 meters above sea level, based on the RBI (Rupa Bumi Indonesia) map sheet 1208-633, edition I-1999, the title map of Soreang with a scale of 1:25,000.</p><p>To reach Mount Puntang from the center of Bandung City, there are two choices of routes. First, the path goes through Jalan Kopo and turns left before entering the Soreang area. Second, the route is via Jalan Mohammad Toha, then crosses Banjaran.</p>'
        ]);

        Post::create([
            'title' => 'Gunung Tangkuban Parahu',
            'category_id' => 1,
            'user_id' => 2,
            'slug' => 'gunung-tangkuban-parahu',
            'image' => '../img/Mountain/tangkuban.jpg',
            'excerpt' => 'One of the natural tourist attractions that is synonymous with the city of Bandung is Mount Tangkuban Perahu',
            'body' => '<p>One of the natural tourist attractions that is synonymous with the city of Bandung is Mount Tangkuban Perahu. The origin of this mountain is told in a famous folk legend, namely the story of Sangkuriang. This mountain has three famous craters. Looking at the crater of the mountain and enjoying the atmosphere around it can attract many visitors, especially on holidays.</p><p>Mount Tangkuban Perahu or also often called Tangkuban Parahu is one of the largest mountains in the Parahyangan plains. Mount Tangkuban Perahu Nature Park is located north of the city of Lembang, north of the city of Bandung. Cool air, expanse of tea gardens, valleys and tall pine trees accompany your journey to the gate of the Tangkuban Perahu area. To enter the Tangkuban Perahu area, you have to pay a ticket of IDR 13,000 per person plus a ticket for the vehicle.</p><p>There are two ways to the craters on this mountain. The first road or the old road with road conditions that are more difficult to pass and will usually be closed after it rains or when it is deemed dangerous to pass. The ticket window guard will give directions to go through a new road that is located higher up if this road is closed. Before paying for tickets on this first street, there were huts that were rented out for places to stay.</p><p>Passing through new roads, paved roads make it easier for your vehicle to travel. On the side of the winding road there are trumpet flowers and other trees that will cool your journey. In the Tangkuban Perahu mountain area there are three interesting craters to visit. The craters are Domas Crater, Ratu Crater and Upas Crater. The largest crater among the three and the most visited is Kawah Ratu. With a few hours of walking, you can even go around the vast Ratu Crater while enjoying the panoramic beauty of Mount Tangkuban Perahu.</p>'
        ]);

        Post::create([
            'title' => 'Gunung Putri Lembang',
            'category_id' => 1,
            'user_id' => 3,
            'slug' => 'gunung-putri-lembang',
            'image' => '../img/Mountain/putri.jpg',
            'excerpt' => 'Mount Putri Lembang is in West Bandung district. To get to the top, the path is quite easy, especially for mountaineering lovers.',
            'body' => '<p>Mount Putri Lembang is in West Bandung district. To get to the top, the path is quite easy, especially for mountaineering lovers.</p><p>The height of Mount Putri Lembang is relatively easy for experienced climbers, but it is quite suitable for practicing beginner climbers. So for those of you who are going up the mountain for the first time, you dont need to worry about climbing the princess mountain.</p><p>From above the height, apart from getting a beautiful view of the city of Lembang, you will also clearly see the historical majesty of Mount Tangkuban Perahu. The location of Mount Tangkuban Perahu itself is close to Mount Putri. The height of Mount Putri Lembang itself is only around 1,580 meters above sea level.</p><p>Passing through new roads, paved roads make it easier for your vehicle to travel. On the side of the winding road there are trumpet flowers and other trees that will cool your journey. In the Tangkuban Perahu mountain area there are three interesting craters to visit. The craters are Domas Crater, Ratu Crater and Upas Crater. The largest crater among the three and the most visited is Kawah Ratu. With a few hours of walking, you can even go around the vast Ratu Crater while enjoying the panoramic beauty of Mount Tangkuban Perahu.In addition to the height which is at a moderate level, the track to the top is also quite easy. It only takes about 30 minutes to reach the top of Gunung Putri. This is one of the strong reasons why Gunung Putri is a favorite of novice climbers. Thus Gunung Putri becomes a Bandung tour for novice climbers.</p>'
        ]);

        Post::create([
            'title' => 'Gunung Manglayang',
            'category_id' => 1,
            'user_id' => 4,
            'slug' => 'gunung-manglayang',
            'image' => '../img/Mountain/manglayang.jpg',
            'excerpt' => 'Of the many mountains in east Bandung, there is one that is clearly visible and is larger in size than the others.',
            'body' => '<p>Of the many mountains in east Bandung, there is one that is clearly visible and is larger in size than the others. The shape is also unique, it seems to have one main peak, with a small peak to the east. The mountain is known as Mount Manglayang. From almost all directions of the city of Bandung, this mountain can be seen.</p><p>The height of Mount Manglayang according to the latest RBI (Rupa Bumi Indonesia) map issued by BIG (Geospatial Information Agency) is 1827 meters above sea level (masl). But we know him better with an altitude of 1818 masl. Maybe because the prettier numbers make it easier to remember.</p><p>Apart from its beauty, Mount Manglayang is also known for its purity. Mount Manglayang is considered suitable for people who have the goal of seeking tranquility and carrying out a religious journey. Its not wrong that Mount Manglayang has always had the title of a kabuyutan. Kabuyutan itself has the meaning of a place that is purified and used as a center for the spread of religion or belief in its time.</p>'
        ]);

        Post::create([
            'title' => 'Tebing Keraton',
            'category_id' => 1,
            'user_id' => 5,
            'slug' => 'tebing-keraton',
            'image' => '../img/Mountain/keraton.jpg',
            'excerpt' => 'Tebing Keraton Bandung, located in the Dago area of Bandung, are a booming local tourist spot with the help of social media',
            'body' => '<p>Tebing Keraton Bandung, located in the Dago area of Bandung, are a booming local tourist spot with the help of social media. Tebing Keraton or palace hills are a hill with steep cliffs facing directly to the Juanda Bandung Forest Park area. Coupled with the Tangkuban Perahu mountain background, it adds to the beauty of this area.</p><p>This tourist spot in Bandung became known on social media around July 2014, but because of its beauty it quickly became known and visited. This natural tourist destination in Bandung is more recommended to visit in the morning. If you like photography, the view of the sunrise or sunset from this cliff is worth capturing. There are also many drone users hunting videos here.</p><p>Tebing Keraton are located not too far from the Juanda Forest Park, and are even included in the Juanda Forest area. To get to the location, the road is quite easy really. Its just that there is no public transportation that goes directly to the area. The location is rather remote, but still quite easy to reach.</p>'
        ]);

        Post::create([
            'title' => 'Situ Ciburuy',
            'category_id' => 3,
            'user_id' => 1,
            'slug' => 'situ-ciburuy',
            'image' => '../img/Lake/ciburuy.jpg',
            'excerpt' => 'Situ Ciburuy is located in Ciburuy Village, Padalarang District, West Bandung Regency. Situ Ciburuy is a heritage site of the Pajajaran kingdom during the reign of King Siliwangi.',
            'body' => '<p>Situ Ciburuy is located in Ciburuy Village, Padalarang District, West Bandung Regency. Situ Ciburuy is a heritage site of the Pajajaran kingdom during the reign of King Siliwangi.</p><p>During the reign of King Kian Santang, this site was used as an arena for battles with the champions of the island of Java or challengers who wanted to fight with King Kiansantang, so the Ciburuy site was used as a place to fight.</p><p>Situ Ciburuy was formed from two small rivers whose ends met in a small village called Ciburuy, which later the meeting area of the river was dammed by local residents with the aim of irrigation or irrigation for the residents rice fields in 1918. Previously, when the dam was not fully filled with water there ciburuy is a wide plain that looks like a field.</p><p> However, the longer the dam could not hold the large volume of water, the area eventually became inundated for almost 15 hectares. There Ciburuy there are relics from the kingdom of Pajajaran, among others; keris, cleaver (weapon of Siliwangi king), bende or bell made of bronze, and ancient Sundanese writing on nipah and palm leaves written by prabu Kian Santang.</p>'
        ]);

        Post::create([
            'title' => 'Situ Patenggang',
            'category_id' => 3,
            'user_id' => 2,
            'slug' => 'situ-patenggang',
            'image' => '../img/Lake/patengan.jpg',
            'excerpt' => 'The name Situ Patengan itself comes from the word "pateang-teangan" which means looking for each other.',
            'body' => '<p>The name Situ Patengan itself comes from the word "pateang-teangan" which means looking for each other. According to this story, it is believed that couples who have stopped at Batu Cinta and traveled around Asmara Island will find eternal love like the two lovebirds Ki Santang and Dewi Rengganis. Based on the legendary love story, this location deserves to be considered as a honeymoon destination for newly married young couples.Surrounded by eye-soothing tea plantations, this lake is also an alternative location for family tourism. We can try to get around the lake by boat or try water cycling for a distance that is not too far from the edge. Previously, it is recommended that you haggle over prices to get a suitable rental price. The existence of strawberry plantations along the side of the winding road by the lake, further adds to the attractiveness of Lake Patentan.</p><p>Situ Patengan is located at an altitude of 1600 m, at the foot of Mount Patuha. To reach the location, which is approximately 47 km from the city of Bandung, it takes about 2 hours.</p>'
        ]);

        Post::create([
            'title' => 'Situ Cileunca',
            'category_id' => 3,
            'user_id' => 3,
            'slug' => 'situ-cileunca',
            'image' => '../img/Lake/cileunca.jpg',
            'excerpt' => 'Situ Cileunca is one of the tourist attractions in the southern part of Bandung.',
            'body' => '<p>Situ Cileunca is one of the tourist attractions in the southern part of Bandung. This tourist spot is actually an artificial lake with a depth of 17 meters and has an area of around 1,400 hectares. Because of its breadth, this lake looks so natural that it blends with the surrounding nature. The location there is in an area that has an altitude of 1,550 meters above sea level. No wonder this tourist area is a pretty interesting spot to see the natural phenomena of sunset and sunrise. In fact, the existence of this lake bears witness to the history of the colonial era by the Dutch State.</p><p>This lake or lake is deliberately made together with the aim of being a source of electricity or hydropower. The electricity will later be channeled to coffee and tea plantations around the area. It took a long time, namely approximately 7 years to complete the project. Only in 1926, the lake was completed and officially used.</p><p>However, over time this area functioned as a source of water for the surrounding community, especially as garden irrigation. Because of its stunningly beautiful panorama, this place is also being hunted by tourists who want to enjoy its exotic charm. Visitors can enjoy the beautiful panorama around it on the love bridge in the middle of the lake. In addition, visitors can enjoy outbound rides that challenge adrenaline at quite affordable rates. Not far from the lake area, there are strawberry and mulberry gardens which are open to visitors there. Simply by paying IDR 5,000 rupiah, they can go around the garden and are allowed to taste the fruits on the spot.</p>'
        ]);

        Post::create([
            'title' => 'Sanghyang Heuleut',
            'category_id' => 3,
            'user_id' => 4,
            'slug' => 'sanghyang-heuleut',
            'image' => '../img/Lake/sanghyang.jpg',
            'excerpt' => 'Sanghyang Heuleut is a lake that flows over the ancient Citarum river. One of the ancient lakes whose rock formations can be seen directly.',
            'body' => '<p>Sanghyang Heuleut is a lake that flows over the ancient Citarum river. One of the ancient lakes whose rock formations can be seen directly. Uniquely, many people believe that this place is used to bathe the angels. Like the folklore that developed in Sundanese land. The meaning of Sanghyang Heuleut itself consists of two words, namely, Sanghyang means a holy place. Then, Heuleut means interval or time.</p><p>There are about 3 Sanghyang that can be enjoyed in this area. All three have different charms and functions. Likewise with mythical stories that are developing rapidly among local residents. Myths that are always believed and closely guarded as a cultural diversity are quite interesting to observe. Apart from Sanghyang Heuleut, there is also Sanghyang tikoro. Where Tikoro means throat.</p><p>. So, according to the stories of the residents, Sanghyang is the place where the water of the ancient Bandung lake mysteriously disappeared. In fact, this mystery has yet to be answered. The name Tikoro or esophagus is not an exaggeration. Because, this water flow goes into a dark place. Like an esophagus, more like a cave that is interesting to explore. It is said that he said again, according to village elders, Sanghyang was the forerunner of the formation of Bandung. Still according to the stories of the elders, this is where Bandung will sink. This place is also usually visited by Dayang Sumbi to bathe. The location of this cave is near the PLTA. Native friends who are curious and want to see the beauty of the cave. You can just go down the stairs that have been provided. After arriving at the courtyard of the cave below, you will be presented with an enchanting view of Sanghyang Tikoro, even though the location is a little hidden.</p>'
        ]);

        Post::create([
            'title' => 'Taman Hutan Raya Ir. H. Djuanda',
            'category_id' => 4,
            'user_id' => 5,
            'slug' => 'hutan-djuanda',
            'image' => '../img/Forest/tahura.jpg',
            'excerpt' => 'Forest Park Ir. H. Djuanda (Tahura Djuanda) is a conservation area that is integrated between secondary nature and plantation forests of the Pinus type (Pinus merkusil).',
            'body' => '<p>Forest Park Ir. H. Djuanda (Tahura Djuanda) is a conservation area that is integrated between secondary nature and plantation forests of the Pinus type (Pinus merkusil) located in the Cikapundung River Sub-Watershed and the Citarum Watershed which stretches from Curug Dago, Dago Pakar to Curug Maribaya which is part of the Pulosari Mountain forest group. Tahura Djuanda is located in the north of Bandung City, approximately 7 km from the city center, geographically located at 1070 30" East Longitude and 60 52" South Latitude, administratively it is in the area of Ciburial Village, Cimenyan District, Bandung Regency and partly belongs to Mekarwangi Village, Cibodas Village, Langensari Village, and Wangunharja Village, Lembang District, West Bandung Regency and Dago Village, Coblong District, Bandung City. Based on the reconstruction results of the 2003 Djuanda Tahura boundaries, the area is 526.98 ha.</p><p>The largest park ever built by the Dutch East Indies Government was originally a protected forest with the name Pulosari Protected Forest with an area of 590 ha. Its pioneering began in 1912 at the same time as the construction of the Cikapundung River water tapping tunnel, now known as "Dutch Cave", which was inaugurated in 1922. Since Indonesia independence, the Pulosari Protected Forest area has automatically become an asset to the government of the Republic of Indonesia managed by the Forestry Department. Governor of West Java Mashudi in 1960 initiated the Nature Tourism Forest Park which is also the Botanical Garden.</p>'
        ]);

        Post::create([
            'title' => 'Hutan Pinus Cikole',
            'category_id' => 4,
            'user_id' => 1,
            'slug' => 'hutan-pinus-cikole',
            'image' => '../img/Forest/pinus.jpg',
            'excerpt' => 'The atmosphere of Mount Puri is located in Jayagiri Lembang, West Bandung Regency, West Java',
            'body' => '<p>The atmosphere of Mount Puri is located in Jayagiri Lembang, West Bandung Regency, West Java. West Bandung Regency has 16 districts and 165 villages. Culinary Lembang throughout the village, starting from Jalan Grand Hotel, they sell special culinary delights, namely grilled sticky rice, roasted corn, hanging chicken colenak. Its beauty is increasing because it is here too.</p><p>This Pondok Wisata inn is located on a hill on a stretch of grass that lies between pine trees with cool air and is located at the foot of Mount Tangkuban Perahu. The coordinates are -678027771076361084. The article using the village area of Jeung Desa in Indonesia, namely the mangrupa level, needs to be perfected. Orchid Forest Cikole Bandung focuses on introducing and cultivating various orchid plants. The air is cool with a temperature of 20 degrees Celsius and the contours of the Graphic Cikole area are hilly surrounded by pine forests in an area of 9 hectares.</p><p>Cikole Pine Forest Tourism Lembang PAL 16 Entrance Ticket Price IDR 10,000 Opening Hours Close 0800 1700 WIB Phone 0818-0217-1766 Address Jl. Graphic Cikole Tour Character Building in the Pine Forest of Bandung. Puncak Punclut is located behind the SESKO AU Complex and the end of the Cijeruk road, a tourist spot that is busy on Sundays. This Pondok Wisata is one of the inns in Lembang Bandung which is at the Graphic Cikole Tourism Terminal.</p>'
        ]);

        Post::create([
            'title' => 'Babakan Siliwangi',
            'category_id' => 4,
            'user_id' => 2,
            'slug' => 'babakan-siliwangi',
            'image' => '../img/Forest/baksil.jpg',
            'excerpt' => 'Babakan Siliwangi or known for short as Baksil is one of the urban forest areas in Bandung, located in Lebak Siliwangi Village, Coblong District, Bandung City.',
            'body' => '<p>Babakan Siliwangi or known for short as Baksil is one of the urban forest areas in Bandung, located in Lebak Siliwangi Village, Coblong District, Bandung City. The location of Babakan Siliwangi which is not far from the city center (north of downtown Bandung) makes Babakan Siliwangi the most affordable Green Open Space (RTH) for the people of Bandung city. The existence of Babakan Siliwangi as RTH has also made this area the lungs of the city as well as a recreation area for the community. Babakan Siliwangi has an area of 3.8 hectares filled with various animals that complement the existing ecosystem.</p><p>In its journey, the management of Babakan Siliwangi has experienced many controversies, especially the plan to transfer the management of Babakan Siliwangi to a private party that plans commercial development. The Babakan Siliwangi area is a valley area formed by the Cikapundung River tens of thousands of years ago, so many Bandung people consider this area to be a natural heritage for the city of Bandung. During the Dutch colonial era, this area already existed and was known as the green belt area of Bandung City under the name Lebak Gede.</p><p>Therefore, in 1920, the architects who designed the city of Bandung planned to make this area an urban forest as well as an open plantation for the general public. The architects not only left this area as a lush area but also made several other facilities such as a botanical garden called Tamansari in the southern part of Lebak Gede and also a zoo facility, which is currently known as the Bandung Zoo. In another part of Lebak Gede which is parallel to Jalan Cihampelas, the architects made baths, flower gardens and fish ponds which we later know as Cihampelas Baths.</p>'
        ]);

        Post::create([
            'title' => 'Taman Bunga Cihideung',
            'category_id' => 4,
            'user_id' => 3,
            'slug' => 'taman-bunga-Cihideung',
            'image' => '../img/Forest/taman.jpg',
            'excerpt' => 'The Cihideung Lembang flower garden is a park and also a garden with various kinds of flower plants which can be said to be very complete.',
            'body' => '<p>The Cihideung Lembang flower garden is a park and also a garden with various kinds of flower plants which can be said to be very complete. Cihideung Flower Park itself is the largest flower garden in Bandung district. With various collections of flowers and a wide area, its no wonder that this flower garden is visited by many tourists who love flowers.</p><p>The Flower Garden which is located in Bandung does not only contain flower plants but also sells ornamental plants and also cut plants. Ornamental plants that are sold in this park are usually purchased by tourists who want to take the plants home.</p><p>Meanwhile, cut plants in the Cihideung flower garden are usually sold for decoration purposes. The Cihideung flower garden stands on an area of 50 hectares and provides various types of ornamental plants of various sizes. Starting from small pots, you can find bonsai plants of various other sizes in this flower garden. The price is quite varied, ranging from tens to hundreds of thousands of rupiah. Tourists who come to this area can choose and bring home the types of flowers they like.</p>'
        ]);

        Post::create([
            'title' => 'Bukit Moko',
            'category_id' => 4,
            'user_id' => 4,
            'slug' => 'bukit-moko',
            'image' => '../img/Forest/moko.jpg',
            'excerpt' => 'Moko Hill is a hill located in the Bandung area with a height of about 1500 meters above sea level.',
            'body' => '<p>Moko Hill is a hill located in the Bandung area with a height of about 1500 meters above sea level. Because it is located quite high, you can feel the cool and cool air, which makes the night comfortable. From Moko Hill, at night you can see the beautiful view of the city of Bandung from above. Surrounded by many mountains and decorated with twinkling city lights, Buki Moko is ready to spoil the eyes of every visitor.</p><p>In addition, with the cool and cold air typical of a height, it will certainly add to the atmosphere at night in Bandung, becoming more serene. If you want to linger to enjoy the view on Moko Hill, there are also several camping grounds that you can live in. The atmosphere at night can be even more exciting with the presence of a bonfire, so the cold can slowly erode. Then the next day, you can do trekking in a vast pine forest.</p><p>The sight of pine trees lined up neatly with green leaves can certainly make you more excited. To reach Moko Hill, there are at least three paths that you can choose. The first is via the Bojong Koneng road, the Bojong Koneng route has the closest distance when compared to the other two routes.</p>'
        ]);
        Post::create([
            'title' => 'Nimo Highland, A very popular new tour in 2022',
            'category_id' => 1,
            'user_id' => 5,
            'slug' => 'nimo-highland',
            'image' => '../img/Mountain/nimo.jpg',
            'excerpt' => 'A new tourist spot opened with the theme of nature and the beauty of sunrise in the Banjarsari area, Kec. Pangalengan, Bandung Regency, West Java.',
            'body' => '<p>Nimo Highland is a new natural tourist spot in Bandung which just opened on May 2, 2022. The name Nimo Highland stands for Nini Mountain which is taken from the location where this tourist spot is located, namely Gunung Nini.
            Nimo Highland has various kinds of facilities, namely: Restaurants, indoor and outdoor cafes at the top while the lower part has horse riding facilities, prayer room, food court and even shelters to wait for shuttle vehicles.
            Apart from that, Nimo Highland has some very interesting rides, including the Nimo Sky Bridge
            Virtual Reality Cinema
            Painteaball: Battle of NIMO
            Shoot Targets
            ATV
            </p>'
        ]);
    }
}
