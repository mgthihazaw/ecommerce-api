<?php

use App\Http\Resources\ProductResource;
use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $products = [
        [
            "name" => "AyeGear",
            "description" => "The AyeGear T5 is a T-shirt with five separate compartments designed for travellers to provide security and accessibility to their valuables and travel essentials. 

            Our unique design allows travellers to discreetly carry all their travel essentials such as their smartphone, sunglasses, passport, credit cards and keys. With discretely designed pockets secured by colour-matched and concealed zips (top grade), the T5 wearer can travel in confidence without the fear of losing their valuables to pickpockets.
            
            Our T-shirts are made from only the finest 100% cotton and we use a lightweight 180 gsm weave for the perfect balance between style and durability.",
            "image" => "http://localhost:8000/images/products/tshirt1.jpg",
            "category_id" => 4,
            "price" => 5000,
        ],
        [
            "name" => "Acer Swift 3",
            "description" => "The Acer Swift 3 (SF314-42) is a 14-inch ultraportable laptop that weighs 1.17 kilograms and runs (up to) AMD’s eight-core AMD Ryzen 7 4700U APU that is paired with 8 GB of LPDDR4 memory as well as an SSD. The PC has everything that one comes to expect from a 2020 ultrathin notebook, including Bluetooth 5.0, Wi-Fi 6, USB 3.2 Gen 2 ports, and a fingerprint scanner.",
            "image" => "http://localhost:8000/images/products/laptop.jpg",
            "price" => 800000,
            "category_id" => 2,
        ],
        [
            "name" => "Stone Hambour",
            "description" => "Take it back to basics for an authentic look delivering modest fashion at its best. Go ahead and create a multitude of styles with this men's black t-shirt featuring a v-neck and regular fit.",
            "image" => "http://localhost:8000/images/products/tshirt2.jpg",
            "price" => 6000,
            "category_id" => 4,
        ],
        [
            "name" => "HP 250 G2 Notebook",
            "description" => "The HP 250 G2 Notebook PC is the ideal PC for your daily workloads. This amazing notebook PC lets you experience tremendous processing performance as it comes equipped with a powerful Intel Core i3 3110M 2.4GHz Processor. The 4GB of DDR3 memory lets you efficiently handle multiple applications. It is also equipped with flexible 500GB HDD, allowing you to secure your entire files and other important data with such ease. With the 15.6 in. display, you can have amazingly razor-sharp display quality. This device comes with Windows 7 Professional / Windows 8.1 Pro (Downgrade) OS for enhanced performance on the go. Whether you’re in the office or at home, the device lets you stay connected with its reliable 802.11b/g/n Wireless LAN. Keep yourself productive wherever you are with the HP 250 G2 Notebook PC.",
            "image" => "http://localhost:8000/images/products/laptop1.jpg",
            "price" => 1000000,
            "category_id" => 2,
        ],
        [
            "name" => "Acer Swift 3",
            "description" => "The Acer Swift 3 (SF314-42) is a 14-inch ultraportable laptop that weighs 1.17 kilograms and runs (up to) AMD’s eight-core AMD Ryzen 7 4700U APU that is paired with 8 GB of LPDDR4 memory as well as an SSD. The PC has everything that one comes to expect from a 2020 ultrathin notebook, including Bluetooth 5.0, Wi-Fi 6, USB 3.2 Gen 2 ports, and a fingerprint scanner.",
            "image" => "http://localhost:8000/images/products/laptop.jpg",
            "price" => 800000,
            "category_id" => 2,
        ],


        [
            "name" => "AyeGear",
            "description" => "The AyeGear T5 is a T-shirt with five separate compartments designed for travellers to provide security and accessibility to their valuables and travel essentials. 

            Our unique design allows travellers to discreetly carry all their travel essentials such as their smartphone, sunglasses, passport, credit cards and keys. With discretely designed pockets secured by colour-matched and concealed zips (top grade), the T5 wearer can travel in confidence without the fear of losing their valuables to pickpockets.
            
            Our T-shirts are made from only the finest 100% cotton and we use a lightweight 180 gsm weave for the perfect balance between style and durability.",
            "image" => "http://localhost:8000/images/products/tshirt1.jpg",
            "category_id" => 4,
            "price" => 5000,
        ],
        [
            "name" => "Acer Swift 3",
            "description" => "The Acer Swift 3 (SF314-42) is a 14-inch ultraportable laptop that weighs 1.17 kilograms and runs (up to) AMD’s eight-core AMD Ryzen 7 4700U APU that is paired with 8 GB of LPDDR4 memory as well as an SSD. The PC has everything that one comes to expect from a 2020 ultrathin notebook, including Bluetooth 5.0, Wi-Fi 6, USB 3.2 Gen 2 ports, and a fingerprint scanner.",
            "image" => "http://localhost:8000/images/products/laptop.jpg",
            "price" => 800000,
            "category_id" => 2,
        ],
        [
            "name" => "Stone Hambour",
            "description" => "Take it back to basics for an authentic look delivering modest fashion at its best. Go ahead and create a multitude of styles with this men's black t-shirt featuring a v-neck and regular fit.",
            "image" => "http://localhost:8000/images/products/tshirt2.jpg",
            "price" => 6000,
            "category_id" => 4,
        ],
        [
            "name" => "HP 250 G2 Notebook",
            "description" => "The HP 250 G2 Notebook PC is the ideal PC for your daily workloads. This amazing notebook PC lets you experience tremendous processing performance as it comes equipped with a powerful Intel Core i3 3110M 2.4GHz Processor. The 4GB of DDR3 memory lets you efficiently handle multiple applications. It is also equipped with flexible 500GB HDD, allowing you to secure your entire files and other important data with such ease. With the 15.6 in. display, you can have amazingly razor-sharp display quality. This device comes with Windows 7 Professional / Windows 8.1 Pro (Downgrade) OS for enhanced performance on the go. Whether you’re in the office or at home, the device lets you stay connected with its reliable 802.11b/g/n Wireless LAN. Keep yourself productive wherever you are with the HP 250 G2 Notebook PC.",
            "image" => "http://localhost:8000/images/products/laptop1.jpg",
            "price" => 1000000,
            "category_id" => 2,
        ],
        [
            "name" => "Acer Swift 3",
            "description" => "The Acer Swift 3 (SF314-42) is a 14-inch ultraportable laptop that weighs 1.17 kilograms and runs (up to) AMD’s eight-core AMD Ryzen 7 4700U APU that is paired with 8 GB of LPDDR4 memory as well as an SSD. The PC has everything that one comes to expect from a 2020 ultrathin notebook, including Bluetooth 5.0, Wi-Fi 6, USB 3.2 Gen 2 ports, and a fingerprint scanner.",
            "image" => "http://localhost:8000/images/products/laptop.jpg",
            "price" => 800000,
            "category_id" => 2,
        ],



        [
            "name" => "AyeGear",
            "description" => "The AyeGear T5 is a T-shirt with five separate compartments designed for travellers to provide security and accessibility to their valuables and travel essentials. 

            Our unique design allows travellers to discreetly carry all their travel essentials such as their smartphone, sunglasses, passport, credit cards and keys. With discretely designed pockets secured by colour-matched and concealed zips (top grade), the T5 wearer can travel in confidence without the fear of losing their valuables to pickpockets.
            
            Our T-shirts are made from only the finest 100% cotton and we use a lightweight 180 gsm weave for the perfect balance between style and durability.",
            "image" => "http://localhost:8000/images/products/tshirt1.jpg",
            "category_id" => 4,
            "price" => 5000,
        ],
        [
            "name" => "Acer Swift 3",
            "description" => "The Acer Swift 3 (SF314-42) is a 14-inch ultraportable laptop that weighs 1.17 kilograms and runs (up to) AMD’s eight-core AMD Ryzen 7 4700U APU that is paired with 8 GB of LPDDR4 memory as well as an SSD. The PC has everything that one comes to expect from a 2020 ultrathin notebook, including Bluetooth 5.0, Wi-Fi 6, USB 3.2 Gen 2 ports, and a fingerprint scanner.",
            "image" => "http://localhost:8000/images/products/laptop.jpg",
            "price" => 800000,
            "category_id" => 2,
        ],
        [
            "name" => "Stone Hambour",
            "description" => "Take it back to basics for an authentic look delivering modest fashion at its best. Go ahead and create a multitude of styles with this men's black t-shirt featuring a v-neck and regular fit.",
            "image" => "http://localhost:8000/images/products/tshirt2.jpg",
            "price" => 6000,
            "category_id" => 4,
        ],
        [
            "name" => "HP 250 G2 Notebook",
            "description" => "The HP 250 G2 Notebook PC is the ideal PC for your daily workloads. This amazing notebook PC lets you experience tremendous processing performance as it comes equipped with a powerful Intel Core i3 3110M 2.4GHz Processor. The 4GB of DDR3 memory lets you efficiently handle multiple applications. It is also equipped with flexible 500GB HDD, allowing you to secure your entire files and other important data with such ease. With the 15.6 in. display, you can have amazingly razor-sharp display quality. This device comes with Windows 7 Professional / Windows 8.1 Pro (Downgrade) OS for enhanced performance on the go. Whether you’re in the office or at home, the device lets you stay connected with its reliable 802.11b/g/n Wireless LAN. Keep yourself productive wherever you are with the HP 250 G2 Notebook PC.",
            "image" => "http://localhost:8000/images/products/laptop1.jpg",
            "price" => 1000000,
            "category_id" => 2,
        ],
        [
            "name" => "Acer Swift 3",
            "description" => "The Acer Swift 3 (SF314-42) is a 14-inch ultraportable laptop that weighs 1.17 kilograms and runs (up to) AMD’s eight-core AMD Ryzen 7 4700U APU that is paired with 8 GB of LPDDR4 memory as well as an SSD. The PC has everything that one comes to expect from a 2020 ultrathin notebook, including Bluetooth 5.0, Wi-Fi 6, USB 3.2 Gen 2 ports, and a fingerprint scanner.",
            "image" => "http://localhost:8000/images/products/laptop.jpg",
            "price" => 800000,
            "category_id" => 2,
        ],

        [
            "name" => "AyeGear",
            "description" => "The AyeGear T5 is a T-shirt with five separate compartments designed for travellers to provide security and accessibility to their valuables and travel essentials. 

            Our unique design allows travellers to discreetly carry all their travel essentials such as their smartphone, sunglasses, passport, credit cards and keys. With discretely designed pockets secured by colour-matched and concealed zips (top grade), the T5 wearer can travel in confidence without the fear of losing their valuables to pickpockets.
            
            Our T-shirts are made from only the finest 100% cotton and we use a lightweight 180 gsm weave for the perfect balance between style and durability.",
            "image" => "http://localhost:8000/images/products/tshirt1.jpg",
            "category_id" => 4,
            "price" => 5000,
        ],
        [
            "name" => "Acer Swift 3",
            "description" => "The Acer Swift 3 (SF314-42) is a 14-inch ultraportable laptop that weighs 1.17 kilograms and runs (up to) AMD’s eight-core AMD Ryzen 7 4700U APU that is paired with 8 GB of LPDDR4 memory as well as an SSD. The PC has everything that one comes to expect from a 2020 ultrathin notebook, including Bluetooth 5.0, Wi-Fi 6, USB 3.2 Gen 2 ports, and a fingerprint scanner.",
            "image" => "http://localhost:8000/images/products/laptop.jpg",
            "price" => 800000,
            "category_id" => 2,
        ],
        [
            "name" => "Stone Hambour",
            "description" => "Take it back to basics for an authentic look delivering modest fashion at its best. Go ahead and create a multitude of styles with this men's black t-shirt featuring a v-neck and regular fit.",
            "image" => "http://localhost:8000/images/products/tshirt2.jpg",
            "price" => 6000,
            "category_id" => 4,
        ],
        [
            "name" => "HP 250 G2 Notebook",
            "description" => "The HP 250 G2 Notebook PC is the ideal PC for your daily workloads. This amazing notebook PC lets you experience tremendous processing performance as it comes equipped with a powerful Intel Core i3 3110M 2.4GHz Processor. The 4GB of DDR3 memory lets you efficiently handle multiple applications. It is also equipped with flexible 500GB HDD, allowing you to secure your entire files and other important data with such ease. With the 15.6 in. display, you can have amazingly razor-sharp display quality. This device comes with Windows 7 Professional / Windows 8.1 Pro (Downgrade) OS for enhanced performance on the go. Whether you’re in the office or at home, the device lets you stay connected with its reliable 802.11b/g/n Wireless LAN. Keep yourself productive wherever you are with the HP 250 G2 Notebook PC.",
            "image" => "http://localhost:8000/images/products/laptop1.jpg",
            "price" => 1000000,
            "category_id" => 2,
        ],
        [
            "name" => "Acer Swift 3",
            "description" => "The Acer Swift 3 (SF314-42) is a 14-inch ultraportable laptop that weighs 1.17 kilograms and runs (up to) AMD’s eight-core AMD Ryzen 7 4700U APU that is paired with 8 GB of LPDDR4 memory as well as an SSD. The PC has everything that one comes to expect from a 2020 ultrathin notebook, including Bluetooth 5.0, Wi-Fi 6, USB 3.2 Gen 2 ports, and a fingerprint scanner.",
            "image" => "http://localhost:8000/images/products/laptop.jpg",
            "price" => 800000,
            "category_id" => 2,
        ],


        [
            "name" => "AyeGear",
            "description" => "The AyeGear T5 is a T-shirt with five separate compartments designed for travellers to provide security and accessibility to their valuables and travel essentials. 

            Our unique design allows travellers to discreetly carry all their travel essentials such as their smartphone, sunglasses, passport, credit cards and keys. With discretely designed pockets secured by colour-matched and concealed zips (top grade), the T5 wearer can travel in confidence without the fear of losing their valuables to pickpockets.
            
            Our T-shirts are made from only the finest 100% cotton and we use a lightweight 180 gsm weave for the perfect balance between style and durability.",
            "image" => "http://localhost:8000/images/products/tshirt1.jpg",
            "category_id" => 4,
            "price" => 5000,
        ],
        [
            "name" => "Acer Swift 3",
            "description" => "The Acer Swift 3 (SF314-42) is a 14-inch ultraportable laptop that weighs 1.17 kilograms and runs (up to) AMD’s eight-core AMD Ryzen 7 4700U APU that is paired with 8 GB of LPDDR4 memory as well as an SSD. The PC has everything that one comes to expect from a 2020 ultrathin notebook, including Bluetooth 5.0, Wi-Fi 6, USB 3.2 Gen 2 ports, and a fingerprint scanner.",
            "image" => "http://localhost:8000/images/products/laptop.jpg",
            "price" => 800000,
            "category_id" => 2,
        ],
        [
            "name" => "Stone Hambour",
            "description" => "Take it back to basics for an authentic look delivering modest fashion at its best. Go ahead and create a multitude of styles with this men's black t-shirt featuring a v-neck and regular fit.",
            "image" => "http://localhost:8000/images/products/tshirt2.jpg",
            "price" => 6000,
            "category_id" => 4,
        ],
        [
            "name" => "HP 250 G2 Notebook",
            "description" => "The HP 250 G2 Notebook PC is the ideal PC for your daily workloads. This amazing notebook PC lets you experience tremendous processing performance as it comes equipped with a powerful Intel Core i3 3110M 2.4GHz Processor. The 4GB of DDR3 memory lets you efficiently handle multiple applications. It is also equipped with flexible 500GB HDD, allowing you to secure your entire files and other important data with such ease. With the 15.6 in. display, you can have amazingly razor-sharp display quality. This device comes with Windows 7 Professional / Windows 8.1 Pro (Downgrade) OS for enhanced performance on the go. Whether you’re in the office or at home, the device lets you stay connected with its reliable 802.11b/g/n Wireless LAN. Keep yourself productive wherever you are with the HP 250 G2 Notebook PC.",
            "image" => "http://localhost:8000/images/products/laptop1.jpg",
            "price" => 1000000,
            "category_id" => 2,
        ],
        [
            "name" => "Acer Swift 3",
            "description" => "The Acer Swift 3 (SF314-42) is a 14-inch ultraportable laptop that weighs 1.17 kilograms and runs (up to) AMD’s eight-core AMD Ryzen 7 4700U APU that is paired with 8 GB of LPDDR4 memory as well as an SSD. The PC has everything that one comes to expect from a 2020 ultrathin notebook, including Bluetooth 5.0, Wi-Fi 6, USB 3.2 Gen 2 ports, and a fingerprint scanner.",
            "image" => "http://localhost:8000/images/products/laptop.jpg",
            "price" => 800000,
            "category_id" => 2,
        ],
        [
            "name" => "Acer Swift 3",
            "description" => "The Acer Swift 3 (SF314-42) is a 14-inch ultraportable laptop that weighs 1.17 kilograms and runs (up to) AMD’s eight-core AMD Ryzen 7 4700U APU that is paired with 8 GB of LPDDR4 memory as well as an SSD. The PC has everything that one comes to expect from a 2020 ultrathin notebook, including Bluetooth 5.0, Wi-Fi 6, USB 3.2 Gen 2 ports, and a fingerprint scanner.",
            "image" => "http://localhost:8000/images/products/laptop.jpg",
            "price" => 800000,
            "category_id" => 2,
        ],
        [
            "name" => "Stone Hambour",
            "description" => "Take it back to basics for an authentic look delivering modest fashion at its best. Go ahead and create a multitude of styles with this men's black t-shirt featuring a v-neck and regular fit.",
            "image" => "http://localhost:8000/images/products/tshirt2.jpg",
            "price" => 6000,
            "category_id" => 4,
        ],
        [
            "name" => "HP 250 G2 Notebook",
            "description" => "The HP 250 G2 Notebook PC is the ideal PC for your daily workloads. This amazing notebook PC lets you experience tremendous processing performance as it comes equipped with a powerful Intel Core i3 3110M 2.4GHz Processor. The 4GB of DDR3 memory lets you efficiently handle multiple applications. It is also equipped with flexible 500GB HDD, allowing you to secure your entire files and other important data with such ease. With the 15.6 in. display, you can have amazingly razor-sharp display quality. This device comes with Windows 7 Professional / Windows 8.1 Pro (Downgrade) OS for enhanced performance on the go. Whether you’re in the office or at home, the device lets you stay connected with its reliable 802.11b/g/n Wireless LAN. Keep yourself productive wherever you are with the HP 250 G2 Notebook PC.",
            "image" => "http://localhost:8000/images/products/laptop1.jpg",
            "price" => 1000000,
            "category_id" => 2,
        ],
        [
            "name" => "Acer Swift 3",
            "description" => "The Acer Swift 3 (SF314-42) is a 14-inch ultraportable laptop that weighs 1.17 kilograms and runs (up to) AMD’s eight-core AMD Ryzen 7 4700U APU that is paired with 8 GB of LPDDR4 memory as well as an SSD. The PC has everything that one comes to expect from a 2020 ultrathin notebook, including Bluetooth 5.0, Wi-Fi 6, USB 3.2 Gen 2 ports, and a fingerprint scanner.",
            "image" => "http://localhost:8000/images/products/laptop.jpg",
            "price" => 800000,
            "category_id" => 2,
        ],


        [
            "name" => "AyeGear",
            "description" => "The AyeGear T5 is a T-shirt with five separate compartments designed for travellers to provide security and accessibility to their valuables and travel essentials. 

            Our unique design allows travellers to discreetly carry all their travel essentials such as their smartphone, sunglasses, passport, credit cards and keys. With discretely designed pockets secured by colour-matched and concealed zips (top grade), the T5 wearer can travel in confidence without the fear of losing their valuables to pickpockets.
            
            Our T-shirts are made from only the finest 100% cotton and we use a lightweight 180 gsm weave for the perfect balance between style and durability.",
            "image" => "http://localhost:8000/images/products/tshirt1.jpg",
            "category_id" => 4,
            "price" => 5000,
        ],
        [
            "name" => "Acer Swift 3",
            "description" => "The Acer Swift 3 (SF314-42) is a 14-inch ultraportable laptop that weighs 1.17 kilograms and runs (up to) AMD’s eight-core AMD Ryzen 7 4700U APU that is paired with 8 GB of LPDDR4 memory as well as an SSD. The PC has everything that one comes to expect from a 2020 ultrathin notebook, including Bluetooth 5.0, Wi-Fi 6, USB 3.2 Gen 2 ports, and a fingerprint scanner.",
            "image" => "http://localhost:8000/images/products/laptop.jpg",
            "price" => 800000,
            "category_id" => 2,
        ],
        [
            "name" => "Stone Hambour",
            "description" => "Take it back to basics for an authentic look delivering modest fashion at its best. Go ahead and create a multitude of styles with this men's black t-shirt featuring a v-neck and regular fit.",
            "image" => "http://localhost:8000/images/products/tshirt2.jpg",
            "price" => 6000,
            "category_id" => 4,
        ],
        [
            "name" => "HP 250 G2 Notebook",
            "description" => "The HP 250 G2 Notebook PC is the ideal PC for your daily workloads. This amazing notebook PC lets you experience tremendous processing performance as it comes equipped with a powerful Intel Core i3 3110M 2.4GHz Processor. The 4GB of DDR3 memory lets you efficiently handle multiple applications. It is also equipped with flexible 500GB HDD, allowing you to secure your entire files and other important data with such ease. With the 15.6 in. display, you can have amazingly razor-sharp display quality. This device comes with Windows 7 Professional / Windows 8.1 Pro (Downgrade) OS for enhanced performance on the go. Whether you’re in the office or at home, the device lets you stay connected with its reliable 802.11b/g/n Wireless LAN. Keep yourself productive wherever you are with the HP 250 G2 Notebook PC.",
            "image" => "http://localhost:8000/images/products/laptop1.jpg",
            "price" => 1000000,
            "category_id" => 2,
        ],
        [
            "name" => "Acer Swift 3",
            "description" => "The Acer Swift 3 (SF314-42) is a 14-inch ultraportable laptop that weighs 1.17 kilograms and runs (up to) AMD’s eight-core AMD Ryzen 7 4700U APU that is paired with 8 GB of LPDDR4 memory as well as an SSD. The PC has everything that one comes to expect from a 2020 ultrathin notebook, including Bluetooth 5.0, Wi-Fi 6, USB 3.2 Gen 2 ports, and a fingerprint scanner.",
            "image" => "http://localhost:8000/images/products/laptop.jpg",
            "price" => 800000,
            "category_id" => 2,
        ],
        [
            "name" => "Acer Swift 3",
            "description" => "The Acer Swift 3 (SF314-42) is a 14-inch ultraportable laptop that weighs 1.17 kilograms and runs (up to) AMD’s eight-core AMD Ryzen 7 4700U APU that is paired with 8 GB of LPDDR4 memory as well as an SSD. The PC has everything that one comes to expect from a 2020 ultrathin notebook, including Bluetooth 5.0, Wi-Fi 6, USB 3.2 Gen 2 ports, and a fingerprint scanner.",
            "image" => "http://localhost:8000/images/products/laptop.jpg",
            "price" => 800000,
            "category_id" => 2,
        ],
        [
            "name" => "Stone Hambour",
            "description" => "Take it back to basics for an authentic look delivering modest fashion at its best. Go ahead and create a multitude of styles with this men's black t-shirt featuring a v-neck and regular fit.",
            "image" => "http://localhost:8000/images/products/tshirt2.jpg",
            "price" => 6000,
            "category_id" => 4,
        ],
        [
            "name" => "HP 250 G2 Notebook",
            "description" => "The HP 250 G2 Notebook PC is the ideal PC for your daily workloads. This amazing notebook PC lets you experience tremendous processing performance as it comes equipped with a powerful Intel Core i3 3110M 2.4GHz Processor. The 4GB of DDR3 memory lets you efficiently handle multiple applications. It is also equipped with flexible 500GB HDD, allowing you to secure your entire files and other important data with such ease. With the 15.6 in. display, you can have amazingly razor-sharp display quality. This device comes with Windows 7 Professional / Windows 8.1 Pro (Downgrade) OS for enhanced performance on the go. Whether you’re in the office or at home, the device lets you stay connected with its reliable 802.11b/g/n Wireless LAN. Keep yourself productive wherever you are with the HP 250 G2 Notebook PC.",
            "image" => "http://localhost:8000/images/products/laptop1.jpg",
            "price" => 1000000,
            "category_id" => 2,
        ],
        [
            "name" => "Acer Swift 3",
            "description" => "The Acer Swift 3 (SF314-42) is a 14-inch ultraportable laptop that weighs 1.17 kilograms and runs (up to) AMD’s eight-core AMD Ryzen 7 4700U APU that is paired with 8 GB of LPDDR4 memory as well as an SSD. The PC has everything that one comes to expect from a 2020 ultrathin notebook, including Bluetooth 5.0, Wi-Fi 6, USB 3.2 Gen 2 ports, and a fingerprint scanner.",
            "image" => "http://localhost:8000/images/products/laptop.jpg",
            "price" => 800000,
            "category_id" => 2,
        ],


        [
            "name" => "AyeGear",
            "description" => "The AyeGear T5 is a T-shirt with five separate compartments designed for travellers to provide security and accessibility to their valuables and travel essentials. 

            Our unique design allows travellers to discreetly carry all their travel essentials such as their smartphone, sunglasses, passport, credit cards and keys. With discretely designed pockets secured by colour-matched and concealed zips (top grade), the T5 wearer can travel in confidence without the fear of losing their valuables to pickpockets.
            
            Our T-shirts are made from only the finest 100% cotton and we use a lightweight 180 gsm weave for the perfect balance between style and durability.",
            "image" => "http://localhost:8000/images/products/tshirt1.jpg",
            "category_id" => 4,
            "price" => 5000,
        ],
        [
            "name" => "Acer Swift 3",
            "description" => "The Acer Swift 3 (SF314-42) is a 14-inch ultraportable laptop that weighs 1.17 kilograms and runs (up to) AMD’s eight-core AMD Ryzen 7 4700U APU that is paired with 8 GB of LPDDR4 memory as well as an SSD. The PC has everything that one comes to expect from a 2020 ultrathin notebook, including Bluetooth 5.0, Wi-Fi 6, USB 3.2 Gen 2 ports, and a fingerprint scanner.",
            "image" => "http://localhost:8000/images/products/laptop.jpg",
            "price" => 800000,
            "category_id" => 2,
        ],
        [
            "name" => "Stone Hambour",
            "description" => "Take it back to basics for an authentic look delivering modest fashion at its best. Go ahead and create a multitude of styles with this men's black t-shirt featuring a v-neck and regular fit.",
            "image" => "http://localhost:8000/images/products/tshirt2.jpg",
            "price" => 6000,
            "category_id" => 4,
        ],
        [
            "name" => "HP 250 G2 Notebook",
            "description" => "The HP 250 G2 Notebook PC is the ideal PC for your daily workloads. This amazing notebook PC lets you experience tremendous processing performance as it comes equipped with a powerful Intel Core i3 3110M 2.4GHz Processor. The 4GB of DDR3 memory lets you efficiently handle multiple applications. It is also equipped with flexible 500GB HDD, allowing you to secure your entire files and other important data with such ease. With the 15.6 in. display, you can have amazingly razor-sharp display quality. This device comes with Windows 7 Professional / Windows 8.1 Pro (Downgrade) OS for enhanced performance on the go. Whether you’re in the office or at home, the device lets you stay connected with its reliable 802.11b/g/n Wireless LAN. Keep yourself productive wherever you are with the HP 250 G2 Notebook PC.",
            "image" => "http://localhost:8000/images/products/laptop1.jpg",
            "price" => 1000000,
            "category_id" => 2,
        ],
        [
            "name" => "Acer Swift 3",
            "description" => "The Acer Swift 3 (SF314-42) is a 14-inch ultraportable laptop that weighs 1.17 kilograms and runs (up to) AMD’s eight-core AMD Ryzen 7 4700U APU that is paired with 8 GB of LPDDR4 memory as well as an SSD. The PC has everything that one comes to expect from a 2020 ultrathin notebook, including Bluetooth 5.0, Wi-Fi 6, USB 3.2 Gen 2 ports, and a fingerprint scanner.",
            "image" => "http://localhost:8000/images/products/laptop.jpg",
            "price" => 800000,
            "category_id" => 2,
        ],
        [
            "name" => "Acer Swift 3",
            "description" => "The Acer Swift 3 (SF314-42) is a 14-inch ultraportable laptop that weighs 1.17 kilograms and runs (up to) AMD’s eight-core AMD Ryzen 7 4700U APU that is paired with 8 GB of LPDDR4 memory as well as an SSD. The PC has everything that one comes to expect from a 2020 ultrathin notebook, including Bluetooth 5.0, Wi-Fi 6, USB 3.2 Gen 2 ports, and a fingerprint scanner.",
            "image" => "http://localhost:8000/images/products/laptop.jpg",
            "price" => 800000,
            "category_id" => 2,
        ],
        [
            "name" => "Stone Hambour",
            "description" => "Take it back to basics for an authentic look delivering modest fashion at its best. Go ahead and create a multitude of styles with this men's black t-shirt featuring a v-neck and regular fit.",
            "image" => "http://localhost:8000/images/products/tshirt2.jpg",
            "price" => 6000,
            "category_id" => 4,
        ],
        [
            "name" => "HP 250 G2 Notebook",
            "description" => "The HP 250 G2 Notebook PC is the ideal PC for your daily workloads. This amazing notebook PC lets you experience tremendous processing performance as it comes equipped with a powerful Intel Core i3 3110M 2.4GHz Processor. The 4GB of DDR3 memory lets you efficiently handle multiple applications. It is also equipped with flexible 500GB HDD, allowing you to secure your entire files and other important data with such ease. With the 15.6 in. display, you can have amazingly razor-sharp display quality. This device comes with Windows 7 Professional / Windows 8.1 Pro (Downgrade) OS for enhanced performance on the go. Whether you’re in the office or at home, the device lets you stay connected with its reliable 802.11b/g/n Wireless LAN. Keep yourself productive wherever you are with the HP 250 G2 Notebook PC.",
            "image" => "http://localhost:8000/images/products/laptop1.jpg",
            "price" => 1000000,
            "category_id" => 2,
        ],
        [
            "name" => "Acer Swift 3",
            "description" => "The Acer Swift 3 (SF314-42) is a 14-inch ultraportable laptop that weighs 1.17 kilograms and runs (up to) AMD’s eight-core AMD Ryzen 7 4700U APU that is paired with 8 GB of LPDDR4 memory as well as an SSD. The PC has everything that one comes to expect from a 2020 ultrathin notebook, including Bluetooth 5.0, Wi-Fi 6, USB 3.2 Gen 2 ports, and a fingerprint scanner.",
            "image" => "http://localhost:8000/images/products/laptop.jpg",
            "price" => 800000,
            "category_id" => 2,
        ],


        [
            "name" => "AyeGear",
            "description" => "The AyeGear T5 is a T-shirt with five separate compartments designed for travellers to provide security and accessibility to their valuables and travel essentials. 

            Our unique design allows travellers to discreetly carry all their travel essentials such as their smartphone, sunglasses, passport, credit cards and keys. With discretely designed pockets secured by colour-matched and concealed zips (top grade), the T5 wearer can travel in confidence without the fear of losing their valuables to pickpockets.
            
            Our T-shirts are made from only the finest 100% cotton and we use a lightweight 180 gsm weave for the perfect balance between style and durability.",
            "image" => "http://localhost:8000/images/products/tshirt1.jpg",
            "category_id" => 4,
            "price" => 5000,
        ],
        [
            "name" => "Acer Swift 3",
            "description" => "The Acer Swift 3 (SF314-42) is a 14-inch ultraportable laptop that weighs 1.17 kilograms and runs (up to) AMD’s eight-core AMD Ryzen 7 4700U APU that is paired with 8 GB of LPDDR4 memory as well as an SSD. The PC has everything that one comes to expect from a 2020 ultrathin notebook, including Bluetooth 5.0, Wi-Fi 6, USB 3.2 Gen 2 ports, and a fingerprint scanner.",
            "image" => "http://localhost:8000/images/products/laptop.jpg",
            "price" => 800000,
            "category_id" => 2,
        ],
        [
            "name" => "Stone Hambour",
            "description" => "Take it back to basics for an authentic look delivering modest fashion at its best. Go ahead and create a multitude of styles with this men's black t-shirt featuring a v-neck and regular fit.",
            "image" => "http://localhost:8000/images/products/tshirt2.jpg",
            "price" => 6000,
            "category_id" => 4,
        ],
        [
            "name" => "HP 250 G2 Notebook",
            "description" => "The HP 250 G2 Notebook PC is the ideal PC for your daily workloads. This amazing notebook PC lets you experience tremendous processing performance as it comes equipped with a powerful Intel Core i3 3110M 2.4GHz Processor. The 4GB of DDR3 memory lets you efficiently handle multiple applications. It is also equipped with flexible 500GB HDD, allowing you to secure your entire files and other important data with such ease. With the 15.6 in. display, you can have amazingly razor-sharp display quality. This device comes with Windows 7 Professional / Windows 8.1 Pro (Downgrade) OS for enhanced performance on the go. Whether you’re in the office or at home, the device lets you stay connected with its reliable 802.11b/g/n Wireless LAN. Keep yourself productive wherever you are with the HP 250 G2 Notebook PC.",
            "image" => "http://localhost:8000/images/products/laptop1.jpg",
            "price" => 1000000,
            "category_id" => 2,
        ],
        [
            "name" => "Acer Swift 3",
            "description" => "The Acer Swift 3 (SF314-42) is a 14-inch ultraportable laptop that weighs 1.17 kilograms and runs (up to) AMD’s eight-core AMD Ryzen 7 4700U APU that is paired with 8 GB of LPDDR4 memory as well as an SSD. The PC has everything that one comes to expect from a 2020 ultrathin notebook, including Bluetooth 5.0, Wi-Fi 6, USB 3.2 Gen 2 ports, and a fingerprint scanner.",
            "image" => "http://localhost:8000/images/products/laptop.jpg",
            "price" => 800000,
            "category_id" => 2,
        ],
        [
            "name" => "Acer Swift 3",
            "description" => "The Acer Swift 3 (SF314-42) is a 14-inch ultraportable laptop that weighs 1.17 kilograms and runs (up to) AMD’s eight-core AMD Ryzen 7 4700U APU that is paired with 8 GB of LPDDR4 memory as well as an SSD. The PC has everything that one comes to expect from a 2020 ultrathin notebook, including Bluetooth 5.0, Wi-Fi 6, USB 3.2 Gen 2 ports, and a fingerprint scanner.",
            "image" => "http://localhost:8000/images/products/laptop.jpg",
            "price" => 800000,
            "category_id" => 2,
        ],
        [
            "name" => "Stone Hambour",
            "description" => "Take it back to basics for an authentic look delivering modest fashion at its best. Go ahead and create a multitude of styles with this men's black t-shirt featuring a v-neck and regular fit.",
            "image" => "http://localhost:8000/images/products/tshirt2.jpg",
            "price" => 6000,
            "category_id" => 4,
        ],
        [
            "name" => "HP 250 G2 Notebook",
            "description" => "The HP 250 G2 Notebook PC is the ideal PC for your daily workloads. This amazing notebook PC lets you experience tremendous processing performance as it comes equipped with a powerful Intel Core i3 3110M 2.4GHz Processor. The 4GB of DDR3 memory lets you efficiently handle multiple applications. It is also equipped with flexible 500GB HDD, allowing you to secure your entire files and other important data with such ease. With the 15.6 in. display, you can have amazingly razor-sharp display quality. This device comes with Windows 7 Professional / Windows 8.1 Pro (Downgrade) OS for enhanced performance on the go. Whether you’re in the office or at home, the device lets you stay connected with its reliable 802.11b/g/n Wireless LAN. Keep yourself productive wherever you are with the HP 250 G2 Notebook PC.",
            "image" => "http://localhost:8000/images/products/laptop1.jpg",
            "price" => 1000000,
            "category_id" => 2,
        ],
        [
            "name" => "Acer Swift 3",
            "description" => "The Acer Swift 3 (SF314-42) is a 14-inch ultraportable laptop that weighs 1.17 kilograms and runs (up to) AMD’s eight-core AMD Ryzen 7 4700U APU that is paired with 8 GB of LPDDR4 memory as well as an SSD. The PC has everything that one comes to expect from a 2020 ultrathin notebook, including Bluetooth 5.0, Wi-Fi 6, USB 3.2 Gen 2 ports, and a fingerprint scanner.",
            "image" => "http://localhost:8000/images/products/laptop.jpg",
            "price" => 800000,
            "category_id" => 2,
        ],


        [
            "name" => "AyeGear",
            "description" => "The AyeGear T5 is a T-shirt with five separate compartments designed for travellers to provide security and accessibility to their valuables and travel essentials. 

            Our unique design allows travellers to discreetly carry all their travel essentials such as their smartphone, sunglasses, passport, credit cards and keys. With discretely designed pockets secured by colour-matched and concealed zips (top grade), the T5 wearer can travel in confidence without the fear of losing their valuables to pickpockets.
            
            Our T-shirts are made from only the finest 100% cotton and we use a lightweight 180 gsm weave for the perfect balance between style and durability.",
            "image" => "http://localhost:8000/images/products/tshirt1.jpg",
            "category_id" => 4,
            "price" => 5000,
        ],
        [
            "name" => "Acer Swift 3",
            "description" => "The Acer Swift 3 (SF314-42) is a 14-inch ultraportable laptop that weighs 1.17 kilograms and runs (up to) AMD’s eight-core AMD Ryzen 7 4700U APU that is paired with 8 GB of LPDDR4 memory as well as an SSD. The PC has everything that one comes to expect from a 2020 ultrathin notebook, including Bluetooth 5.0, Wi-Fi 6, USB 3.2 Gen 2 ports, and a fingerprint scanner.",
            "image" => "http://localhost:8000/images/products/laptop.jpg",
            "price" => 800000,
            "category_id" => 2,
        ],
        [
            "name" => "Stone Hambour",
            "description" => "Take it back to basics for an authentic look delivering modest fashion at its best. Go ahead and create a multitude of styles with this men's black t-shirt featuring a v-neck and regular fit.",
            "image" => "http://localhost:8000/images/products/tshirt2.jpg",
            "price" => 6000,
            "category_id" => 4,
        ],
        [
            "name" => "HP 250 G2 Notebook",
            "description" => "The HP 250 G2 Notebook PC is the ideal PC for your daily workloads. This amazing notebook PC lets you experience tremendous processing performance as it comes equipped with a powerful Intel Core i3 3110M 2.4GHz Processor. The 4GB of DDR3 memory lets you efficiently handle multiple applications. It is also equipped with flexible 500GB HDD, allowing you to secure your entire files and other important data with such ease. With the 15.6 in. display, you can have amazingly razor-sharp display quality. This device comes with Windows 7 Professional / Windows 8.1 Pro (Downgrade) OS for enhanced performance on the go. Whether you’re in the office or at home, the device lets you stay connected with its reliable 802.11b/g/n Wireless LAN. Keep yourself productive wherever you are with the HP 250 G2 Notebook PC.",
            "image" => "http://localhost:8000/images/products/laptop1.jpg",
            "price" => 1000000,
            "category_id" => 2,
        ],
        [
            "name" => "Acer Swift 3",
            "description" => "The Acer Swift 3 (SF314-42) is a 14-inch ultraportable laptop that weighs 1.17 kilograms and runs (up to) AMD’s eight-core AMD Ryzen 7 4700U APU that is paired with 8 GB of LPDDR4 memory as well as an SSD. The PC has everything that one comes to expect from a 2020 ultrathin notebook, including Bluetooth 5.0, Wi-Fi 6, USB 3.2 Gen 2 ports, and a fingerprint scanner.",
            "image" => "http://localhost:8000/images/products/laptop.jpg",
            "price" => 800000,
            "category_id" => 2,
        ],
        [
            "name" => "Acer Swift 3",
            "description" => "The Acer Swift 3 (SF314-42) is a 14-inch ultraportable laptop that weighs 1.17 kilograms and runs (up to) AMD’s eight-core AMD Ryzen 7 4700U APU that is paired with 8 GB of LPDDR4 memory as well as an SSD. The PC has everything that one comes to expect from a 2020 ultrathin notebook, including Bluetooth 5.0, Wi-Fi 6, USB 3.2 Gen 2 ports, and a fingerprint scanner.",
            "image" => "http://localhost:8000/images/products/laptop.jpg",
            "price" => 800000,
            "category_id" => 2,
        ],
        [
            "name" => "Stone Hambour",
            "description" => "Take it back to basics for an authentic look delivering modest fashion at its best. Go ahead and create a multitude of styles with this men's black t-shirt featuring a v-neck and regular fit.",
            "image" => "http://localhost:8000/images/products/tshirt2.jpg",
            "price" => 6000,
            "category_id" => 4,
        ],
        [
            "name" => "HP 250 G2 Notebook",
            "description" => "The HP 250 G2 Notebook PC is the ideal PC for your daily workloads. This amazing notebook PC lets you experience tremendous processing performance as it comes equipped with a powerful Intel Core i3 3110M 2.4GHz Processor. The 4GB of DDR3 memory lets you efficiently handle multiple applications. It is also equipped with flexible 500GB HDD, allowing you to secure your entire files and other important data with such ease. With the 15.6 in. display, you can have amazingly razor-sharp display quality. This device comes with Windows 7 Professional / Windows 8.1 Pro (Downgrade) OS for enhanced performance on the go. Whether you’re in the office or at home, the device lets you stay connected with its reliable 802.11b/g/n Wireless LAN. Keep yourself productive wherever you are with the HP 250 G2 Notebook PC.",
            "image" => "http://localhost:8000/images/products/laptop1.jpg",
            "price" => 1000000,
            "category_id" => 2,
        ],
        [
            "name" => "Acer Swift 3",
            "description" => "The Acer Swift 3 (SF314-42) is a 14-inch ultraportable laptop that weighs 1.17 kilograms and runs (up to) AMD’s eight-core AMD Ryzen 7 4700U APU that is paired with 8 GB of LPDDR4 memory as well as an SSD. The PC has everything that one comes to expect from a 2020 ultrathin notebook, including Bluetooth 5.0, Wi-Fi 6, USB 3.2 Gen 2 ports, and a fingerprint scanner.",
            "image" => "http://localhost:8000/images/products/laptop.jpg",
            "price" => 800000,
            "category_id" => 2,
        ],


        [
            "name" => "AyeGear",
            "description" => "The AyeGear T5 is a T-shirt with five separate compartments designed for travellers to provide security and accessibility to their valuables and travel essentials. 

            Our unique design allows travellers to discreetly carry all their travel essentials such as their smartphone, sunglasses, passport, credit cards and keys. With discretely designed pockets secured by colour-matched and concealed zips (top grade), the T5 wearer can travel in confidence without the fear of losing their valuables to pickpockets.
            
            Our T-shirts are made from only the finest 100% cotton and we use a lightweight 180 gsm weave for the perfect balance between style and durability.",
            "image" => "http://localhost:8000/images/products/tshirt1.jpg",
            "category_id" => 4,
            "price" => 5000,
        ],
        [
            "name" => "Acer Swift 3",
            "description" => "The Acer Swift 3 (SF314-42) is a 14-inch ultraportable laptop that weighs 1.17 kilograms and runs (up to) AMD’s eight-core AMD Ryzen 7 4700U APU that is paired with 8 GB of LPDDR4 memory as well as an SSD. The PC has everything that one comes to expect from a 2020 ultrathin notebook, including Bluetooth 5.0, Wi-Fi 6, USB 3.2 Gen 2 ports, and a fingerprint scanner.",
            "image" => "http://localhost:8000/images/products/laptop.jpg",
            "price" => 800000,
            "category_id" => 2,
        ],
        [
            "name" => "Stone Hambour",
            "description" => "Take it back to basics for an authentic look delivering modest fashion at its best. Go ahead and create a multitude of styles with this men's black t-shirt featuring a v-neck and regular fit.",
            "image" => "http://localhost:8000/images/products/tshirt2.jpg",
            "price" => 6000,
            "category_id" => 4,
        ],
        [
            "name" => "HP 250 G2 Notebook",
            "description" => "The HP 250 G2 Notebook PC is the ideal PC for your daily workloads. This amazing notebook PC lets you experience tremendous processing performance as it comes equipped with a powerful Intel Core i3 3110M 2.4GHz Processor. The 4GB of DDR3 memory lets you efficiently handle multiple applications. It is also equipped with flexible 500GB HDD, allowing you to secure your entire files and other important data with such ease. With the 15.6 in. display, you can have amazingly razor-sharp display quality. This device comes with Windows 7 Professional / Windows 8.1 Pro (Downgrade) OS for enhanced performance on the go. Whether you’re in the office or at home, the device lets you stay connected with its reliable 802.11b/g/n Wireless LAN. Keep yourself productive wherever you are with the HP 250 G2 Notebook PC.",
            "image" => "http://localhost:8000/images/products/laptop1.jpg",
            "price" => 1000000,
            "category_id" => 2,
        ],
        [
            "name" => "Acer Swift 3",
            "description" => "The Acer Swift 3 (SF314-42) is a 14-inch ultraportable laptop that weighs 1.17 kilograms and runs (up to) AMD’s eight-core AMD Ryzen 7 4700U APU that is paired with 8 GB of LPDDR4 memory as well as an SSD. The PC has everything that one comes to expect from a 2020 ultrathin notebook, including Bluetooth 5.0, Wi-Fi 6, USB 3.2 Gen 2 ports, and a fingerprint scanner.",
            "image" => "http://localhost:8000/images/products/laptop.jpg",
            "price" => 800000,
            "category_id" => 2,
        ],
    ];
    public function run()
    {
        foreach($this->products as $product){
            Product::create($product);
        }
    }
}
