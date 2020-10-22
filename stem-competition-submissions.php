<?php
$cospark = true;
$title = 'Paint the Sky Student Art Gallery';
include('include/header.php');
include('include/cospark.php');
?>
        <!-- content -->
        <div class="content">
            <div class="container">
                <div class="row py-5">
                    <div class="col stem-page">

                      <h1 class="mt-3 mb-5">Paint the Sky Student Art Gallery</h1>
                      <h2>Click each Artwork to view a description by the artist</h2>

                      <div class="stem-news mt-5">
                        <div class="row mb-4" id="submissions">
                        </div>
                      </div>


                      <script type="text/javascript" async>
                        let submissions =
                        [
                          {
                            "title": "Emily",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/bb15322e511e44fa8932399273e49f77",
                            "desc": "My painting is of a mother and her child looking up up at the stars and seeing a shooting star which they call their Dad/Husband,who has passed away.Their belief is that when a loved one has passed away they come back in the form of a shooting star to watch over them.\n \n I have decided to name my painting ‘The shooting star’."
                          },
                          {
                            "title": "Jack and Rosie",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/7b2a1a0e00be4dcd90c1d90c1a2f5159",
                            "desc": "It was about the emu in the sky and we tried to do a traditional dot painting we also got inspiration form the shooting Star to represent that a love one has safely made it to the after life. We would like to pay respect to the Aboriginals of Australia."
                          },
                          {
                            "title": "Jaimie and Josie",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/d35e65f594bd49da8c6342a30a44d935",
                            "desc": "This painting is inspired by the Emu in the sky along with the seven emu eggs.\n The colours in the background represent the stars and the galaxies. We wanted to incorporate dot painting so we included it in the emu eggs surrounding the Emu."
                          },
                          {
                            "title": "Juliette",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/67aabe732d41449182b6b146341e6116",
                            "desc": "My painting is about the ‘Emu in the sky’, it appears in the night sky around April and May at 8 pm it is a sign for the aboriginal tribe to go and collect the emu eggs. My painting is how the emu is sort of camouflage in the night sky."
                          },
                          {
                            "title": "Lily and Jemima",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/5e7f0c5f2d0b4580a2cfd5907c430617",
                            "desc": "Our painting is about the shooting star. It represents the spirit making it to the after life."
                          },
                          {
                            "title": "Olivia and Stella",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/412ae55688b241e988b9c6b692537eba",
                            "desc": "This is our painting of the emu in the sky with the three eggs that represent the time to collect the eggs which is in April through to May. The colours around the area are all the stars and it shows how wonderful and colourful the sky is."
                          },
                          {
                            "title": "Skylar",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/39550e5c7deb4fe6b3a365151717b322",
                            "desc": "My painting represents the Emu in the sky. When you see the Emu in the sky it means it is time to go looking for emu eggs. It appears in the sky at around 8:00pm in April and May. The green in my painting represents the emu eggs and the orange represents the red earth where the emus live."
                          },
                          {
                            "title": "Amelie (Yr 7), Abigail (Yr 12), Marie (Yr 5), Chanaye (Kindy)",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/eea134a71d11492898928a75dad65c80",
                            "desc": "This term we focused on ‘Space’ as a theme for educational activities. We studied the Milky Way from the perspective of Aboriginal Australians.\n \n We spoke about the Milky Way via www.aboriginalastronomy.com.au/\n \n We emulated the Aboriginal symbol for stars through the technique of paper coiling using upcycled magazines."
                          },
                          {
                            "title": "Arjay E, Kindergarten",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/acfbc223132f481486f00a90c3b36d57",
                            "desc": "This artwork is based around Aboriginal Astrology and Wonnarua land. The student placed their Astrology birth month animal (dingo) in amongst the constellations including the Southern Cross. The student also learnt about the strengths of their animal which connects to visible wellbeing."
                          },
                          {
                            "title": "Ava M, Kindergarten",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/27fb7d2ed1c94808a983c91e50f67698",
                            "desc": "This artwork is based around Aboriginal Astrology and Wonnarua land. The student placed their Astrology birth month animal (wombat) in amongst the constellations including the Southern Cross. The student also learnt about the strengths of their animal which connects to visible wellbeing."
                          },
                          {
                            "title": "Brax C, Kindergarten",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/05bd3bf98e96439ca487a88ad98f285d",
                            "desc": "This artwork is based around Aboriginal Astrology and Wonnarua land. The student placed their Astrology birth month animal (possum) in amongst the constellations including the Southern Cross. The student also learnt about the strengths of their animal which connects to visible wellbeing."
                          },
                          {
                            "title": "Bridey K, Kindergarten",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/c4c414db634642e8a0f4019979d12c81",
                            "desc": "This artwork is based around Aboriginal Astrology and Wonnarua land. The student placed their Astrology birth month animal (wombat) in amongst the constellations including the Southern Cross. The student also learnt about the strengths of their animal which connects to visible wellbeing."
                          },
                          {
                            "title": "Enaya W, Kindergarten",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/109453c0412242768f2abb0afa8585b8",
                            "desc": "This artwork is based around Aboriginal Astrology and Wonnarua land. The student placed their Astrology birth month animal (echidna) in amongst the constellations including the Southern Cross. The student also learnt about the strengths of their animal which connects to visible wellbeing."
                          },
                          {
                            "title": "George B, Kindergarten",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/5ea8cb00595d4d97897b5413d8fa2957",
                            "desc": "This artwork is based around Aboriginal Astrology and Wonnarua land. The student placed their Astrology birth month animal (kangaroo) in amongst the constellations including the Southern Cross. The student also learnt about the strengths of their animal which connects to visible wellbeing."
                          },
                          {
                            "title": "Georgia F, Kindergarten",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/5be0786d18ce46409c2d1c7d6d80f042",
                            "desc": "This artwork is based around Aboriginal Astrology and Wonnarua land. The student placed their Astrology birth month animal (emu) in amongst the constellations including the Southern Cross. The student also learnt about the strengths of their animal which connects to visible wellbeing."
                          },
                          {
                            "title": "Harper, Kindergarten",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/3772b3dd27e5479bb9c64c16986f28bb",
                            "desc": "This artwork is based around Aboriginal Astrology and Wonnarua land. The student placed their Astrology birth month animal (kangaroo) in amongst the constellations including the Southern Cross. The student also learnt about the strengths of their animal which connects to visible wellbeing."
                          },
                          {
                            "title": "Jacob B, Kindergarten",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/337bb7c651b14ff8874df365d2cf1aa0",
                            "desc": "This artwork is based around Aboriginal Astrology and Wonnarua land. The student placed their Astrology birth month animal (kangaroo) in amongst the constellations including the Southern Cross. The student also learnt about the strengths of their animal which connects to visible wellbeing."
                          },
                          {
                            "title": "John K, Kindergarten",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/869824d5c0174b229065c3b67b08af46",
                            "desc": "This artwork is based around Aboriginal Astrology and Wonnarua land. The student placed their Astrology birth month animal (echidna) in amongst the constellations including the Southern Cross. The student also learnt about the strengths of their animal which connects to visible wellbeing."
                          },
                          {
                            "title": "Koby T, Kindergarten",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/1593c7e982a24c528c3be001d3d27fcd",
                            "desc": "This artwork is based around Aboriginal Astrology and Wonnarua land. The student placed their Astrology birth month animal (koala) in amongst the constellations including the Southern Cross. The student also learnt about the strengths of their animal which connects to visible wellbeing."
                          },
                          {
                            "title": "Kyle, Kindergarten",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/16a6f67a7d8e44db88392e622ffd3254",
                            "desc": "This artwork is based around Aboriginal Astrology and Wonnarua land. The student placed their Astrology birth month animal (bilby) in amongst the constellations including the Southern Cross. The student also learnt about the strengths of their animal which connects to visible wellbeing."
                          },
                          {
                            "title": "Lex P, Kindergarten",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/3d59b15c285a4969ad9ccc942dff01c9",
                            "desc": "This artwork is based around Aboriginal Astrology and Wonnarua land. The student placed their Astrology birth month animal (lizard) in amongst the constellations including the Southern Cross. The student also learnt about the strengths of their animal which connects to visible wellbeing."
                          },
                          {
                            "title": "Maya S, Kindergarten",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/419ac8b718284ac4bab1c47a1eaaf61e",
                            "desc": "This artwork is based around Aboriginal Astrology and Wonnarua land. The student placed their Astrology birth month animal (lizard) in amongst the constellations including the Southern Cross. The student also learnt about the strengths of their animal which connects to visible wellbeing."
                          },
                          {
                            "title": "Olivia F, Kindergarten",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/4f453b3fa4684a6bb1af5b7f4a7c1fae",
                            "desc": "This artwork is based around Aboriginal Astrology and Wonnarua land. The student placed their Astrology birth month animal (emu) in amongst the constellations including the Southern Cross. The student also learnt about the strengths of their animal which connects to visible wellbeing."
                          },
                          {
                            "title": "Sonny, Kindergarten",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/259f5bff00204c8a9b6e7280ceda1e3f",
                            "desc": "This artwork is based around Aboriginal Astrology and Wonnarua land. The student placed their Astrology birth month animal (possum) in amongst the constellations including the Southern Cross. The student also learnt about the strengths of their animal which connects to visible wellbeing."
                          },
                          {
                            "title": "Dylan, Year 3",
                            "img": "./img/cospark/dylan.jpg",
                            "desc": "The kangaroo had to feed her babies and she left milk out and that made the Milky Way.\n \n This is my own work."
                          },
                          {
                            "title": "Ryrie, Year 3",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/cf8d9f217c2444efa2ca5d3edd961b30",
                            "desc": "This is the story of two men who kill a kangaroo.\n \n This is my own work."
                          },
                          {
                            "title": "AL, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/9b1a1a706637486dbc6e83e24829660f",
                            "desc": "The Peacock\n The mediums I used were: acrylic paint, washable paint and grey lead. It shows the peacock walking across the ground before turning into a constellation. The story is that the peacock was so arrogant it was sent to space to bring beauty to others. Work of AL."
                          },
                          {
                            "title": "CG, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/6a05e125f8334a629a1c603a230519f2",
                            "desc": "The Creation of the Stars \n This is my artwork of an eagle flying across the night sky. \n The mediums I used were: Acrylic Paints, Washable Paints and Graphite pencil. Every night, the eagle flies across the sky, shedding his silver feathers which turn into stars.\n Artwork created by CG."
                          },
                          {
                            "title": "ER, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/2a1eb4d2df4c46bf9869da331371a9b7",
                            "desc": "Paint the Sky\n I painted the Aurora Australis because it has always had a spell over me and it makes me think that the universe is bigger than it is, and that’s something. The mediums I used were charcoal and soft pastel. This is the work of ER."
                          },
                          {
                            "title": "Etta, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/ffa5c5825b6541c6bb7ce0c4967fea6d",
                            "desc": "This is the Rainbow Serpent. I used alcohol markers on white paper. The border colours have different meanings, such as blue standing for the ocean, where the Rainbow Serpent's body is, while the serpent's eye is in the night sky."
                          },
                          {
                            "title": "HV, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/7087cf72fcd341eaaa1152334efd6ad7",
                            "desc": "I chose to feature bioluminescence because recently I went fishing at night. It was amazing how the water lit up, and it was like the stars had fallen into the ocean. It was an incredible experience, and I thought I would share it through my art. Work by HV."
                          },
                          {
                            "title": "LN, Year 4",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/110e033463ca4c5fa3eca10b479d7182",
                            "desc": "In my artwork I used collage because it makes it look 3D and you get to use different materials. This is the work of LN."
                          },
                          {
                            "title": "LS, Year 4",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/563a04dfc9ec43a9964a54e7a8bb03e6",
                            "desc": "This artwork was inspired by the Southern Cross. The four colours represent our four seasons, even though the aboriginals may have not used the four seasons that we use. I mainly used oil pastels and I had a lot of fun making it. This is the work of Leo."
                          },
                          {
                            "title": "MW, Year 4",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/a0495f15887f4ee9a3601a0fee619ad3",
                            "desc": "The story of my artwork is about the sun shining very brightly on all of the stars, then they fall to the ground, but the moon used the light to save them and brings the stars back up. For this artwork I only used water-colour paint. Artwork of MW."
                          },
                          {
                            "title": "NM, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/6da3f6ee4ccb4b96a5875c4888879bef",
                            "desc": "This is NM’s work. I have done the Virgo constellation with orange, red and yellow colours to show Aboriginal art style. For other stars, I use more cool colours. I have made it so there is a mountain range below so that the sky stands out."
                          },
                          {
                            "title": "RQ, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/d15ac81b5fe04a79b5308066bd3aff76",
                            "desc": "This is an artwork by RQ. It's of the dark emu. Many aboriginal peoples used the Dark Emu to know when to collect emu eggs. The mediums that I used were paint and soft pastel."
                          },
                          {
                            "title": "WP, Year 4",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/88820c640f94438cb16a6139f35e6dc9",
                            "desc": "Meteors \n Mediums used: oil pastels, soft pastels, water colours.\n This artwork is about the creation of objects. Stars came down as meteors and made all the objects in the world, including rivers, cliffs, trees and rocks.\n  This artwork was made by WP."
                          },
                          {
                            "title": "ZL, Year 4",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/87ada57147c842128f9b95e2161e910b",
                            "desc": "My art represents the story of the moon getting fat and eating all the spirits. The stars are the souls. This piece of art means a lot to me. The white represents the stars, the red represents the aboriginal people and the blue is water. This is the work of ZL."
                          },
                          {
                            "title": "Alex, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/beac55c51715422faeb3e9db666217bc",
                            "desc": "My picture’s name is “The echidna in the sky” because echidnas will protect themselves if they feel threatened. My connection to my picture is that everyone has got a guardian angel therefore everyone has an echidna protecting them. Some of the colours I used are brown, blue, orange and purple."
                          },
                          {
                            "title": "Amyra, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/5f1e0734968d4e6c9d0d83d546a53dc8",
                            "desc": "The name of my art piece is Outback Kangaroo. The reason why I called it Outback Kangaroo is because the animal I chose is in the outback and the animal I chose lives in the outback. The thing I liked about my VIPS is the seven sisters and the three brothers."
                          },
                          {
                            "title": "Ashton, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/3f95babef60545ef90d338ae73b4b6d8",
                            "desc": "My artwork's name is The Gathering. It's also a Dreamtime story; it's very different. I used black, orange and brown as they are very warm colour. My favourite VIP was something I learnt but different and this whole thing inspired me."
                          },
                          {
                            "title": "Bonni, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/e8c03d5b80464718a2084d1bfba14386",
                            "desc": "The name of my artwork is by the name of Australian, Aboriginal Dreamtime. I was very inspired by the Seven Sisters Dreamtime story. I have drawn an Australian Koala and an Australian bird to resemble the Australian and Aboriginal cultures. I have used warm and cold colours to represent warmth and coldness that appears around us."
                          },
                          {
                            "title": "Brodee, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/62305ff2261a443a8013ce68af95c4cb",
                            "desc": "Kangaroo Blend \n \n I named my picture Kangaroo Blend, because I drew a kangaroo in a grey sky. I blended black and white to make grey. I drew it because a kangaroo is an Australian animal."
                          },
                          {
                            "title": "Brooke, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/568ffeb947ff444da9689fdde9ccd980",
                            "desc": "Australian \n I picked my artwork because it includes using dots which are a form of aboriginal art lines a snack and one tree and a wombat,kangaroo and one koala head because i used chalk and my favorite vip was the emu."
                          },
                          {
                            "title": "Chanelle, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/4307a5328cf04a7e8f7fd493108e7ab0",
                            "desc": "The thing I had liked most about this Aboriginal Astronomy was that it had helped me in my learning because at first I was very confused on what the “seven sisters” were."
                          },
                          {
                            "title": "David, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/a69f5e9e5e2b4e1096dbe9eff8c238ae",
                            "desc": "I drew a picture of a kangaroo."
                          },
                          {
                            "title": "Deacon, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/a5c3e97827ed44bea6421ccf37b2fdf0",
                            "desc": "My picture's name is The Dingo. I chose this because it’s a cool Australian animal and I’m like a Dingo, because I’m always hot and loud. My colours that I used were yellow for the sand, dark blue for the sky and light blue for the sky. My Dingo is red, black and yellow and it reminds me of the aboriginal Culture."
                          },
                          {
                            "title": "Ella, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/8d826935c91345c2aaf8ae88777c7e3c",
                            "desc": "The Seven Sisters\n The name of my picture is the Seven Sisters, all of the groups of dots represent the sisters and the things coming after them are men. I chose this Dreamtime story because I think it is cool how each dot represents a sister. One thing I learnt from this unit of work is that Aboriginal people used to tell the different seasons at Stone Henge."
                          },
                          {
                            "title": "Emmeline, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/b5b4dee610fb405e8873113c4b39cb33",
                            "desc": "My picture's name is called “The Yellow Tailed Black Cockatoo.” I named it this because the main focus on my picture is the cockatoo. My connection is that a black cockatoo is an Australian animal that I see in the Bush. The thing I like the most from my VIPS is that the Seven Sisters were running away from a man who wanted to be a husband."
                          },
                          {
                            "title": "Ethan, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/a2760b7e75e04eab87cd66e2a6d2c9ad",
                            "desc": "My Artworks name is Animal Gathering because all the animals are gathering in the one spot. I was inspired by many artworks. I saw that they did not have many animals in them so I decided to make one that was all about the Australian Animals."
                          },
                          {
                            "title": "Gabby, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/f0c2053b7cef44e6a58b65203d3ad9b6",
                            "desc": "Aussie Koala Sunrise \n My connection was during the school holidays I watched a movie on koala that inspired me to do more on animals. I don’t know much about them, then I saw a photo and went yes that would make a great picture I put a Aussie flag because I am Aussie."
                          },
                          {
                            "title": "Hannah, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/a80c49ac6cad4a3fa268d285212b4713",
                            "desc": "The Gum Tree\n My artwork is called “The Gum Tree.” My connection with the Widgety Grub pattern in the gum tree reminded me of my old home in the desert. The thing I liked the most from my VIP’s are the different stories of the stars."
                          },
                          {
                            "title": "Iasmin, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/ad5867e14ab94427a385e380c8dad508",
                            "desc": "Bonfire at Night\n My picture's name is Bonfire at Night. I named it that because in my picture I have a bonfire with Aboriginal people and two wombats and an emu. My connection to my picture, is once I went with my family for a bonfire and I saw a wombat."
                          },
                          {
                            "title": "Imogen, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/cfde21ed1d5d4887a6ed6f9cc64cacf6",
                            "desc": "The Lesser Bilby\n My picture is called The Lesser Bilby. The blue and purple oil pastels mixed, I found a nice colour for the background. I chose to do a Lesser Bilby because it is an endangered, Australian animal, to make it so people can learn and be reminded of this species."
                          },
                          {
                            "title": "Keira, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/915e34bbf6b643cb85a2746015e07921",
                            "desc": "My picture name is dotted serpent. I named it this because I have a lot of dots on my picture as well as the rainbow serpent that’s slithers across my page."
                          },
                          {
                            "title": "Kieran, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/56064242e8e14b27af5996d80f0bfd06",
                            "desc": "My picture's name is “The Australian Spirit” and I chose a Kangaroo, Wombat and Dingo to represent that the picture is Australian. I did dots, lines, and other things to represent an Aboriginal Dreamtime. I made the sky black to make it look like it’s in the night sky and white dots for stars."
                          },
                          {
                            "title": "Marshall, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/25f0f14f3c2d46ce99e3d130cf454b6c",
                            "desc": "Warm Koala. I named my artwork this because all around the edges are dark and gloomy cool colours and in the middle is vibrant warm colours alongside a white koala. I chose a koala because I really love koalas and that they only eat eucalyptus leaves and sleep all the time."
                          },
                          {
                            "title": "Matt, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/0a0d39f2c9794aa698185e13365769d5",
                            "desc": "Dingo \n I drew a Dingo because it reminds me of the outback. My connection with the Dingo is a Dog and a Wolf. The thing I liked the most about the VIP is that it shows you the history in Aboriginal Astronomy and whatnot can do with its stars."
                          },
                          {
                            "title": "Mylan, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/648083f556434021a6e632272074acd5",
                            "desc": "My artwork is called TheLight in the Night, because the emu and the seven sisters shine through the darkness making it clear for anyone trying to make their way home. I drew a boy pointing up to the stars representing me when I layed in my backyard looking up."
                          },
                          {
                            "title": "Noah, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/567ab87284084a3db2f9d0b12c8be0d5",
                            "desc": "Aboriginal Astronomy \n \n My picture is called The Night, because I like the night sky. I used black for my background and yellow,orange and brown for my kangaroo."
                          },
                          {
                            "title": "Payton, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/0820f9e880d840ae841dd30791f31efb",
                            "desc": "My picture name is The Land of the Animals. The colours I used were yellow, orange, red/pink, brown and green. The story that inspired me was the Emu in the Sky. My favourite VIPs were the emu comes out to collect the eggs."
                          },
                          {
                            "title": "Rhys, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/4268106e3e1a4b56be4c5fd67386d7ab",
                            "desc": "I named my artwork The Big Kangaroo, because I was inspired by The Emu in the Sky, also because one of my favourite animals is a kangaroo. I connected with my artwork because it has cold colours, I put my favourite animal is a kangaroo."
                          },
                          {
                            "title": "Taylor, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/9afcfa7005df4e78aab26ea72b674ca9",
                            "desc": "I called my art piece ‘The Flag’ because I didn’t really know a name and one to fit the ruby reds and the dry browns for the bottom and sky blues and purples for the top. One thing I learned from some of my VIP’S was that most stars and constellations tell stories."
                          },
                          {
                            "title": "Zahli, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/9738602431ed4294a30d97ca2d0fdd3a",
                            "desc": "My picture's name is the “Seven Sisters”. I named it the Seven Sisters because I did little spiral patterns as it strongly reminded it of the Seven Sisters. The thing I liked most from my V.I.P’s were, when it’s Autumn it is easier to see the Emu In The Sky. Another thing I liked was the Seven Sisters carried the brothers along with them."
                          },
                          {
                            "title": "Blake M, Year 2",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/d5c553553c9e458fa8837cf76c8207ca",
                            "desc": "2 Blue first learnt about the Emu in the sky when learning about Earth and Space. All the students were in awe of the Emu's beauty and were amazed to learn about how it was utilised by the worlds first astronomers, the Aboriginal people. This is Blake's interpretation of it."
                          },
                          {
                            "title": "Bradley D, Year 2",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/d5817069bdd642eb91526163262f4f58",
                            "desc": "2 Blue first learnt about the Emu in the sky when learning about Earth and Space. All the students were in awe of the Emu's beauty and were amazed to learn about how it was utilised by the worlds first astronomers, the Aboriginal people. This is Bradley's interpretation of it."
                          },
                          {
                            "title": "Bridget T, Year 2",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/4fa9c8e1d6ce4e00b7313b3c1ee3a060",
                            "desc": "2 Blue first learnt about the Emu in the sky when learning about Earth and Space. All the students were in awe of the Emu's beauty and were amazed to learn about how it was utilised by the worlds first astronomers, the Aboriginal people. This is Bridget's interpretation of it."
                          },
                          {
                            "title": "Caleb B, Year 2",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/0df1af8a2f0f48e79b48e5a4d9a16839",
                            "desc": "2 Blue first learnt about the Emu in the sky when learning about Earth and Space. All the students were in awe of the Emu's beauty and were amazed to learn about how it was utilised by the worlds first astronomers, the Aboriginal people. This is Caleb's interpretation of it."
                          },
                          {
                            "title": "Caleb M, Year 2",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/195a2607b200464c9ca0673d4ec1608a",
                            "desc": "2 Blue first learnt about the Emu in the sky when learning about Earth and Space. All the students were in awe of the Emu's beauty and were amazed to learn about how it was utilised by the worlds first astronomers, the Aboriginal people. This is Caleb's interpretation of it."
                          },
                          {
                            "title": "Chloe B, Year 2",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/c3a49a679a70487fb680ba834b4055f6",
                            "desc": "2 Blue first learnt about the Emu in the sky when learning about Earth and Space. All the students were in awe of the Emu's beauty and were amazed to learn about how it was utilised by the worlds first astronomers, the Aboriginal people. This is Chloe's interpretation of it."
                          },
                          {
                            "title": "Dallas D, Year 2",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/065dee69f0794da19971ca57952afd88",
                            "desc": "2 Blue first learnt about the Emu in the sky when learning about Earth and Space. All the students were in awe of the Emu's beauty and were amazed to learn about how it was utilised by the worlds first astronomers, the Aboriginal people. This is Dallas' interpretation of it."
                          },
                          {
                            "title": "Holly-Mae J, Year 2",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/05e490c4def6455e8dc155429690cf2d",
                            "desc": "2 Blue first learnt about the Emu in the sky when learning about Earth and Space. All the students were in awe of the Emu's beauty and were amazed to learn about how it was utilised by the worlds first astronomers, the Aboriginal people. This is Holly-Mae's interpretation of it."
                          },
                          {
                            "title": "Jarrod D, Year 2",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/7b81bca523794a5f93ff68ae7d8631f1",
                            "desc": "2 Blue first learnt about the Emu in the sky when learning about Earth and Space. All the students were in awe of the Emu's beauty and were amazed to learn about how it was utilised by the worlds first astronomers, the Aboriginal people. This is Jarrod's interpretation of it."
                          },
                          {
                            "title": "Jett H, Year 2",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/3cb2f7620da64bd7bdbdacaed842ca39",
                            "desc": "2 Blue first learnt about the Emu in the sky when learning about Earth and Space. All the students were in awe of the Emu's beauty and were amazed to learn about how it was utilised by the worlds first astronomers, the Aboriginal people. This is Jett's interpretation of it."
                          },
                          {
                            "title": "Kobe L, Year 2",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/e46be4fbd41d47a99a8ea32428e7a0df",
                            "desc": "2 Blue first learnt about the Emu in the sky when learning about Earth and Space. All the students were in awe of the Emu's beauty and were amazed to learn about how it was utilised by the worlds first astronomers, the Aboriginal people. This is Kobe's interpretation of it."
                          },
                          {
                            "title": "Korbyn R, Year 2",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/d3ba73c39aa54818af6c34109974eaed",
                            "desc": "2 Blue first learnt about the Emu in the sky when learning about Earth and Space. All the students were in awe of the Emu's beauty and were amazed to learn about how it was utilised by the worlds first astronomers, the Aboriginal people. This is Korbyn's interpretation of it."
                          },
                          {
                            "title": "Levi P, Year 2",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/e3d527af5c8d41659489397736e7dd82",
                            "desc": "2 Blue first learnt about the Emu in the sky when learning about Earth and Space. All the students were in awe of the Emu's beauty and were amazed to learn about how it was utilised by the worlds first astronomers, the Aboriginal people. This is Levi's interpretation of it."
                          },
                          {
                            "title": "Logan A, Year 2",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/ba40e55ae2684708acd5eb3ab0203fe7",
                            "desc": "2 Blue first learnt about the Emu in the sky when learning about Earth and Space. All the students were in awe of the Emu's beauty and were amazed to learn about how it was utilised by the worlds first astronomers, the Aboriginal people. This is Logan's interpretation of it."
                          },
                          {
                            "title": "Logan H, Year 2",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/45277cbe63084b3b91f8d7415a0ab8fb",
                            "desc": "2 Blue first learnt about the Emu in the sky when learning about Earth and Space. All the students were in awe of the Emu's beauty and were amazed to learn about how it was utilised by the worlds first astronomers, the Aboriginal people. This is Logan's interpretation of it."
                          },
                          {
                            "title": "Maddison M, Year 2",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/16a053d7720a43fc9c023c9bc2c3f724",
                            "desc": "2 Blue first learnt about the Emu in the sky when learning about Earth and Space. All the students were in awe of the Emu's beauty and were amazed to learn about how it was utilised by the worlds first astronomers, the Aboriginal people. This is Maddison's interpretation of it."
                          },
                          {
                            "title": "Matilda G, Year 2",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/1390518d82f0441aa8aaa7351cb9e513",
                            "desc": "2 Blue first learnt about the Emu in the sky when learning about Earth and Space. All the students were in awe of the Emu's beauty and were amazed to learn about how it was utilised by the worlds first astronomers, the Aboriginal people. This is Matilda's interpretation of it."
                          },
                          {
                            "title": "RJ H, Year 2",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/7f80f4e87fef4acd81945a30d1e5434a",
                            "desc": "2 Blue first learnt about the Emu in the sky when learning about Earth and Space. All the students were in awe of the Emu's beauty and were amazed to learn about how it was utilised by the worlds first astronomers, the Aboriginal people. This is RJ's interpretation of it."
                          },
                          {
                            "title": "Tiana-Jean E, Year 2",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/31a7205e088441b8b04b5325374d1d6f",
                            "desc": "2 Blue first learnt about the Emu in the sky when learning about Earth and Space. All the students were in awe of the Emu's beauty and were amazed to learn about how it was utilised by the worlds first astronomers, the Aboriginal people. This is Tiana-Jean's interpretation of it."
                          },
                          {
                            "title": "Tom G, Year 2",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/1aa4d8bbe8a747b5a59f3319bbd9bf04",
                            "desc": "2 Blue first learnt about the Emu in the sky when learning about Earth and Space. All the students were in awe of the Emu's beauty and were amazed to learn about how it was utilised by the worlds first astronomers, the Aboriginal people. This is Tom's interpretation of it."
                          },
                          {
                            "title": "Felicity V, 3/4LM",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/42eb5a658f4e4d238a64faad502776e9",
                            "desc": "My artwork is a representation of all the Aboriginal clans living under the same sky, seeing the emu laying her eggs each year."
                          },
                          {
                            "title": "Hannah C, 3/4LM",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/524f6edb176740af8b40616579d69dd4",
                            "desc": "My artwork represents the colourful stories of aboriginal people coming together and displayed in the sky."
                          },
                          {
                            "title": "Khloe C, 3/4LM",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/2c592d92932248589ae4a3a902e9ad5d",
                            "desc": "My artwork represents The Milky Way, the emu in the sky and the eggs she lays each year."
                          },
                          {
                            "title": "Leo T, 3/4LM",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/33457735d0d14b3f9578ccfd2664e1c6",
                            "desc": "My artwork represents Dark Emu and how she got into the sky."
                          },
                          {
                            "title": "Louie J, 3/4LM",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/016fdf3b9be64280bdef1cda0f5be995",
                            "desc": "Every year the dark emu appears in the sky, made visible by the stars. It tells the Aboriginal people when to collect emu eggs. My painting is the young dark emu appearing in the sky."
                          },
                          {
                            "title": "Ava, Year 6",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/d38e709ea5414322bdba72289d68eceb",
                            "desc": "In this artwork I have used dot painting. This tradition is used by the Papunya Tula artists. In my artwork I have referenced the traditional story of the kangaroo. The ancient story forms part of the Kamilaroi and Euahlayi cultural heritage."
                          },
                          {
                            "title": "Couper, Year 4",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/7c72026e41d7463d8ebc31190a8ae373",
                            "desc": "In this artwork I have use dot painting. This traditional painting technique is used by the Papunya Tula artists. In my artwork I have referenced the traditional story of the seven sisters. The ancient story forms part of the Warlpiri community cultural heritage."
                          },
                          {
                            "title": "Eilish, Year 6",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/e2493b1f51504161baed5cde9772d9fd",
                            "desc": "In this artwork I have used the dot painting technique. This traditional dot painting is used by Papunya Tula artist. In my artwork I have referenced the traditional story of the Seven Sisters. The ancient story forms part of the Warlpiri community cultural heritage."
                          },
                          {
                            "title": "Ellie, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/5907f761296d4df8ab76d15b19f48e1a",
                            "desc": "In this artwork I have used texters for the 7 sisters and paint for the man. In my artwork I have referenced the traditional story of the Seven Sisters. The ancient story forms part of the Walpiri Community cultural heritage."
                          },
                          {
                            "title": "Jordyn, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/6a7a406f3a304af2b57e1036c0ee7914",
                            "desc": "In this artwork I have used dot painting. This traditional painting technique is used by Papunya Tula artists. In my artwork I have referenced the traditional story of the emu in the sky. This ancient story forms part of the Papunya cultural heritage."
                          },
                          {
                            "title": "Khaylan, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/18286789c92b4dcda36bca8201e0d09b",
                            "desc": "In this artwork I have used paint. In my artwork I have referenced the traditional story of The Seven Sisters. The ancient story forms part of the Walpiri Community cultural heritage."
                          },
                          {
                            "title": "Marlin, Year 4",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/165b16af5dbc4433828f2e38f631a981",
                            "desc": "In this artwork I have used I have used pencils to sketch and colour. In my artwork I have referenced the traditional story of the seven sisters. The ancient story forms part of the Walpiri Community cultural heritage."
                          },
                          {
                            "title": "Ollie, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/484c20aa7f6f4641a1b2104b97d8c2c6",
                            "desc": "In this artwork I have used dot painting. This traditional Dot painting is used by the Papunya Tula artists. In my artwork I’ve referenced the traditional story of Scorpius. This ancient story formed part of the Kamilaroi and Euahlayi cultural heritage."
                          },
                          {
                            "title": "Tayah, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/2b8d7434ad84496d9d60912e9bed0272",
                            "desc": "In this artwork I have used dot painting. This traditional dot painting is used by the Papunya Tula Artists. In my artwork I have referenced the traditional story of the Emu in the Sky. The ancient story forms part of the Papunya Tula Artists cultural heritage."
                          },
                          {
                            "title": "Benjamin D, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/3269137098e349fa8d0f51be622c1c4f",
                            "desc": "Uluru’s Night Sky\n \n For this artwork I wanted to base it on Uluru's night sky. I chose this because the night sky is beautifully lit up with the bright golden stars. Ayers rock changes colours depending on time of day it is. In the morning, when the sun rises the light beams on the rock and produces a bright red colour. When the sun sets Uluru changes back to its original rusty orange colour."
                          },
                          {
                            "title": "Breanna A,",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/c4131b2642894d35b66e039133745bac",
                            "desc": "The Skyline\n \n My name is Breanna, for my Aboriginal art I used blue for the moon and night, the red for the sun and the morning. Sun and moon are opposites and they represent yin and yang life and death. I used the orange to show the line between night and day."
                          },
                          {
                            "title": "Claire L, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/40563cc5990c4363b703e6ebc8b71790",
                            "desc": "The Rainbow Kookaburra \n \n The kookaburra in my creation represents Australia and the indigenous culture with the Aboriginal and Torres Strait islander colours. I have placed the kookaburra in the center to represent how our indigenous culture always stays together to help each other. To me my artwork means to celebrate each other’s differences."
                          },
                          {
                            "title": "Clancy S, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/0f6f8be12e7245d8b913bffbf2bb592d",
                            "desc": "Boomerangs of the Sky\n \n I have created this piece because I was inspired by the recent work on aboriginal astronomy we have been doing this term.I have chosen the boomerangs in Aboriginal and Torres Strait colours to represent the indigenous people.I drew white stars to connect the boomerangs just like the sky."
                          },
                          {
                            "title": "Cody C,",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/9a33172795f94b45b78eebae04bda7c1",
                            "desc": "Jefferson the emu and Gerald the bird\n \n To me this artwork means that there is peace within the animal kingdom and the animals do not kill each other out of hatred and anger. The animals may kill for food and to survive but they recognise each other as equals and are very peaceful. Animals are very kind."
                          },
                          {
                            "title": "Eli G, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/967bb2c07fdb47728f715263ac85e75b",
                            "desc": "The three brothers and a kayak \n \n \n My artwork means to me: I chose to do my art because I felt a vibe when I saw it and it made me feel like I needed to do it."
                          },
                          {
                            "title": "Elisabeth D-M,",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/2d36a79365164671b4a288d41d4ff7f3",
                            "desc": "The Circle of life\n It means to me that"
                          },
                          {
                            "title": "Fallon W, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/c82e5df69b094125b38797fef69085d5",
                            "desc": "The Koala In Leaves\n \n My name is Fallon Wheeler and for my aboriginal art I did gum leaves and a koala on a tree. The meaning of the green dots is gum leaves and the brown long thing in the middle is a gum nut tree and the koala is hanging off the tree."
                          },
                          {
                            "title": "Henrik S, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/6e9aba860323471584822fa7154bf365",
                            "desc": "An Emu in a Streak \n Of Colour\n \n To me, the artwork means that the Aboriginal community used to gaze into the stars while under their creative shelter and while snuggling up together as a family near the campfire and collecting bush tucker for dinner. They would star into the stars and see the Emu in the sky."
                          },
                          {
                            "title": "Isabella N, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/fdb5199164a64b8e852def830e97dd27",
                            "desc": "Platypus and Canoe In the Milkyway \n \n My artwork is representing a platypus,and a canoe in the Milkyway. I chose the platypus and canoe because this week I leant the story of the canoe. I chose a platypus for my animal because I know that platypuses are an Australian animal,and because I know platypuses were around when Aboriginal people were here."
                          },
                          {
                            "title": "Jackson W, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/4beafd98278948598b57ca0223a1d610",
                            "desc": "The World of Astronomy \n \n This artwork represents my culture. I’m a proud Aboriginal boy who grew up with my mother almost being a part of the stolen generation. This artwork explores my culture through dot painting of the wider universe. The universe and my culture connects me to my ancestors."
                          },
                          {
                            "title": "Kobi W, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/be13fefd09eb42fb98d7fe2b22d64902",
                            "desc": "Kangaroos Dream\n My artwork to me means that you can do whatever you want and follow your dreams like the kangaroo in my picture."
                          },
                          {
                            "title": "Lexie C, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/3c04e143fe5b48bdb57fe1f22f4d3523",
                            "desc": "Coloured Sky \n \n My artwork reflects our Aboriginal people and their unique views of the sky and the world around them. I used a famous Aboriginal drawing/painting technique, dot painting, to tye in the Aboriginal perspective of my art even more. This artwork is my unique interpretation of Aboriginal astronomy."
                          },
                          {
                            "title": "Maddison H, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/9a8bda1c086c46019359357e251537e1",
                            "desc": "The Seven Sisters\n \n This artwork means to me that everybody in the world is connected together by an invisible string. And that no matter how far apart in the world we are, we are connected together forever and ever in our hearts and souls just like the seven sisters are connected together, and will never leave each other."
                          },
                          {
                            "title": "Max H, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/1c3ee8eceaf84a9aa390a91f5cce1920",
                            "desc": "The Emu In the Sky\n \n This artwork means to me that animals are all special. We need to take good care of Animals. They deserve to live in. Also deserving a home , we need to stop destroying our wonderful animals like the Emu’s homes, plant plants for the Emu’s and other animals so they live."
                          },
                          {
                            "title": "Meyah S, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/9bf734ef4d30457b8f4b9bf4b3c741ba",
                            "desc": "Boomerang in the sky\n \n \n \n \n My artwork reflects on how the Aboriginal people used to hunt and used the sky to help them navigate where they are. The boomerang meant to me that the Aboriginal people spent there time and hard work to hunt for not only them but they other people in their tribe."
                          },
                          {
                            "title": "Nash N, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/309ee71c2c3a49af8e1485d5759af8b1",
                            "desc": "Emu Flying Through the Storm\n \n \n \n My artwork means that you can do anything you can dream of like flying in the sky.You can dream maybe one day it might come true you never know the impossible becomes possible.All ways try again always give everything another go.Always dream big to make big things happen."
                          },
                          {
                            "title": "Rebekah A, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/12a676ec0e9f4f6ba65a769a15055f9a",
                            "desc": "We Are All Connected\n \n This artwork means that we are all connected by the Milky Way. And that there are always people looking down on us. That this universe is beautiful and we must cherish it. We can always look to the sky and see what the Rainbow Serpent made for us to enjoy."
                          },
                          {
                            "title": "Rory B,",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/24beb620a5ee446d971a4c3766a54260",
                            "desc": "Aboriginal peoples meal \n \n My artwork is a huge kangaroo being hunted. The aboriginal people are looking for a meal and they have found a huge kangaroo.My artwork to me means that the aboriginal people are owners of the land and i picked a kangaroo because they are the animal that represent Australia’s"
                          },
                          {
                            "title": "Scarlet C,",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/684a1970dac7408694dce45901c0422b",
                            "desc": "Stick man Dingo\n \n My creation is representing stars in the Milky Way. These stars look like a dingo, it looks like a stick man, this dingo has no ears which is different. It’s connecting with all the people that died. every star has something special about it. All stars are connected to god."
                          },
                          {
                            "title": "Taylah S, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/1e52a8b822084408abb6666dda049ab1",
                            "desc": "The Goanna In Between\n \n My name is Taylah Scott and for my aboriginal art I used green for earth, purple for space, and for my centrepiece I used a goanna in a tree. I used a goanna because I went bass fishing with my Dad and we saw three colossal goanna just like my goanna."
                          },
                          {
                            "title": "Taylah-Marie B, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/8c9750b118ff475ba34335d8c6c3d381",
                            "desc": "The Aboriginal Astronomy Artwork\n \n The artwork means that we are connected to the things that have happened for example the two brothers in the canoe. All Aborginal astronomy things are in the Milkyway that I have learn't. It makes me feel surprised that we are learning about these things."
                          },
                          {
                            "title": "Ada, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/001d6ca1ec064e5fbbdf75cc228edd71",
                            "desc": "This is an original artwork by Ada. Aboriginal legends state that emus were the creator spirits flying and looking over Earth.\n The emu is south of the Southern Cross. The head, a dark cloud between stars. The neck, body and legs are formed of dust lanes across the milky way."
                          },
                          {
                            "title": "Arwen, Year 4",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/ec9513a0077f4930bff9611a61311980",
                            "desc": "This original artwork by Arwen, features a Wedge Tailed Eagle under the beautiful night sky while the constellations twinkle brightly.\n For the Kaurana people of the Adelaide plains, the eagle’s claw takes the form of a constellation known as the southern cross!"
                          },
                          {
                            "title": "Asher, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/5a4d65213c2b430ea76306a873b83e0f",
                            "desc": "This is an original artwork by Asher, of the Aurora Australis. I chose this because I think the aurora Australis looks amazing and very colourful. The aroura Australis was named after Galileo in 1619 from the roman goddess of the dawn and the Greek name for the north wind."
                          },
                          {
                            "title": "Bailey, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/19d5f162f196431585eeb44cea7e1a72",
                            "desc": "This is an original artwork by Bailey, a day to remember. In this photo you can see the Aboriginals represented by dots running from the cloud of mist. The mist is the white people that invaded their land like a cloud of smoke cloud."
                          },
                          {
                            "title": "Ellie, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/90d72b4bd37a4f0785cef55d90c07f05",
                            "desc": "This is an original artwork by Ellie, I have painted the seven sisters. The seven sisters were chased across Australia by a man called Jukura-Jukura, but he is forbidden to marry a sister because of her race, so he chases the sisters Tuari, Maia, Electra, Elaeno, Merope, Pleione and Tuari."
                          },
                          {
                            "title": "Hester, Year 4",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/b2bc255373d344b4a02a85e17a840408",
                            "desc": "This is an original artwork by Hester, a dot painting of an aboriginal girl with her bark canoe, watching the stars and the constellation of the Emu. The colours I used where dark purple and a dark blue as well as a silvery blue and a vibrant purple."
                          },
                          {
                            "title": "Isaac, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/8c7b2097095445afa749a29fefa358af",
                            "desc": "This is an original piece of artwork by Isaac, the emu is stretched across the galaxy. There was a wombat Wardu and cat Jooteetch who was married to an Emu Wej. Jooteetch grabbed Wej and threw her into the flames. Wej jumped high into the sky that she never returned."
                          },
                          {
                            "title": "Isabel, Year 4",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/83f5efc2e1be455093b762146d38ff2a",
                            "desc": "This is an original artwork by Isabel, it is of The Seven Sisters constellation. Their names are Tari, Maia, Electra, Cepaene, Merope, Pleione and Tauris. I used paint. I did the man chasing them as cold colours because he was bad and the sisters’ hot colours because they were good."
                          },
                          {
                            "title": "Jack, Year 4",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/ce9c475b10a6424884edfaa59d6d219f",
                            "desc": "This is an original artwork by Jack, I chose the Aurora Australis because it’s important to Aboriginal culture. When risen it shows the blood of warriors or the spirits going from the underworld to heaven. The Aurora Australis has beautiful colours and shades, I used chalk to smudge and blend."
                          },
                          {
                            "title": "Jem, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/b822e89c357d4c1e91b3557eab4b61d1",
                            "desc": "This is an original artwork by Jem, of the night sky and the Emu constellation in it. It has a mix of dots and solid colours. When the Emu in the sky appears, Aboriginal people know that it is time to collect Emu eggs. This happens in about July."
                          },
                          {
                            "title": "Lily, Year 4",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/f04edb87a268414cb4b16d8ddf996b39",
                            "desc": "This is an Original artwork by Lily. The colourful lights of the Aroura Australis. The name of my work is The Lights. Aboriginals thought the spirits of the dead are rising to heaven. I used water colour and water colour pencils and tinny bit of chalk."
                          },
                          {
                            "title": "Lola, Year 4",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/e4ea4e0a380b4204a2279c41f4a1ba87",
                            "desc": "This is an original artwork by Lola. The Emu in the Sky is a well-known Aboriginal Constellation. It is outlined by dark patches of the night sky, not the stars. You can see it at 8:30 pm, in the middle of June as you look South on a clear night."
                          },
                          {
                            "title": "Max, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/d72850e94d3c49e39c75b98389c17afe",
                            "desc": "This original art work by Max, called ‘late night’ it represents a night of dancing and fun, it includes a big bon fire, a man dancing (Aboriginals like dancing), an elder playing the digeridoo and kangaroo marks. In the night sky there is Saturn, stars and the Arora Australis."
                          },
                          {
                            "title": "Nellie, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/823cd21f8efb4086bbd8710552aff2d6",
                            "desc": "This is an original artwork by Nellie, a dot painting about the consultation The Seven Sisters. The story of the Seven Sisters is that they are running away from the Jampijinpa man, they travel across the land, then from a steep hill they launch themselves into the sky to escape."
                          },
                          {
                            "title": "Polly, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/b143ec8863f340a38cd22f9bd91b84bc",
                            "desc": "This is an original artwork by Polly. I chose to draw and paint an emu looking up at the emu in the sky constellation. I have researched Aboriginal legends and Emus are a sort of spiritual legend that was used to fly and look down over the land."
                          },
                          {
                            "title": "Riley, Year 4",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/91feb27490b9454a9253c097d318f781",
                            "desc": "This is an original artwork by Riley. It has spirits and people sitting around a fire. The people in the sky stands for the dream time, the rainbow serpent is watching down on the Aboriginal and Torres Strait Islanders eating bush tucker and telling stories."
                          },
                          {
                            "title": "Ruby, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/65b3d43a3e424452a33ca73ffc4cfac5",
                            "desc": "This is an original artwork by Ruby, I chose the Aurora Australis. The colours I used were white, black, green, pink, purple, yellow and silver. I painted stars, hills and the Aurora. I used a big piece of paper and I put dots for my Aboriginal constellation art work."
                          },
                          {
                            "title": "Rufus, Year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/d60efaffe29a4eb68e5fb8977de3180e",
                            "desc": "This is an original piece of artwork by Rufus. To the aboriginal people of the south the aurora represents the blood of warriors who were fighting a great battle in the sky. Or dead spirits rising to the heavens. All these events in the sky are often linked to blood."
                          },
                          {
                            "title": "Wesley, Year 4",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/ca26a2dea0ac4e96983d6fd1f7be65ce",
                            "desc": "This is an original artwork by Wesley. I painted this picture because I thought that it related to Aboriginal Astronomy and how the Aboriginals told stories. It shows spirits that go into the sky. It is people around the campfire in the outback with the emu spirit."
                          },
                          {
                            "title": "Wesley, Year 4",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/bc789a4937c34a0c9d963a8fb1de1aa4",
                            "desc": "This is an original artwork by Wesley. I painted this picture because I thought that it related to Aboriginal Astronomy and how the Aboriginals told stories. It shows spirits that go into the sky. It is people around the campfire in the outback with the emu spirit."
                          },
                          {
                            "title": "Zoe, Year 4",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/0690715ff6f24f03817b78727da93cff",
                            "desc": "This is an original artwork by Zoe, of the Emu in The Sky constellation. It shows the Emu with its eggs, which helped Aboriginal people know when it is time to collect eggs. The Aurora Australis added a stunning bit of colour after the pale dark rest of the picture."
                          },
                          {
                            "title": "Ava L, Year 4",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/2ef04b76d6bb4a04a5d1af9e890851e6",
                            "desc": "Hi my name is Ava Longmuir. My painting is based on the emu in the sky. When the indigenous people of Australia could see the emu in the sky that meantt it was time to collect emu eggs! My drawing is a galaxy with stars in the background. Thank you."
                          },
                          {
                            "title": "Charli K, Year 4",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/2a4730404f6340d0801998f8c942d925",
                            "desc": "Hi, my Name Is Charli Kennedy. My artwork is based on the emu in the sky Aboriginal Astrology story. I did lots of different colours like, blue, gold, green, orange, black, turquoise and peach. In the background I have drawn some Aboriginal style stars and some other stars in the background."
                          },
                          {
                            "title": "Charlie K, Year 4",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/8150ff9de2eb4ccda26e205aa90bd94d",
                            "desc": "The Emu in the sky is an aboriginal story that aboriginal people share in their huts and clans. Also, the seven sisters is another aboriginal story shared from generation to generation."
                          },
                          {
                            "title": "Ella P, Year 4",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/f6bd81c0b0b74cf081b82e60b6f62484",
                            "desc": "This piece of art is the seven sisters in the night sky. I used cool colours for the milky way and for the outside I used warm colours. I chose this constellation because it is a big part of aboriginal history. My name is Ella Park, and this is my piece of art."
                          },
                          {
                            "title": "Harry E, Year 4",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/2e33c6dd19234f3892daa06d8dda4a96",
                            "desc": "My paint the sky picture is inspired by the emu in the sky and the seven sisters. The symbols in my picture are based on passed down stories from Aboriginal Australian people."
                          },
                          {
                            "title": "Indi H, Year 4",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/a0995af8cf4742cf808bd1ca1e469d5f",
                            "desc": "Hi my name is Indi Howe and my painting is based on the emu in the sky. I really liked doing it because I love art and painting. I used lots and lots of black. I also used red, orange, yellow, green and dark blue all for the milky way. I flicked on stars with white paint."
                          },
                          {
                            "title": "Isaac R, Year 4",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/44284d71d0fb446f90fa1ed0d69104ae",
                            "desc": "My artwork is important to me and Aboriginal Australians because it uses the seven sisters. It also shows the emu in the sky. Black is the most popular colour."
                          },
                          {
                            "title": "Jacob C, Year 4",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/1e9178a07c7348d7ae1223d54cfdd6d7",
                            "desc": "Hi my name is Jacob and this is my artwork. The dots I used represent footprints. The short lines are shooting stars. The Big dots are emu footprints. The main colour is blue, and my story is based on Aboriginal astrology stories such as the emu in the sky."
                          },
                          {
                            "title": "Kellan B, Year 4",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/2f436f32e6e24fc6823d2415f583b64d",
                            "desc": "Hi my name is Kellan. I used the seven sisters as my theme because I know it is important to Aboriginal astronomy. I used blue for water and green to show grass and red to show fire. I used a lot of dots because I know a lot of Aboriginal art work has dots."
                          },
                          {
                            "title": "Matilda L, Year 4",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/73a3b70e3a414deea27b56b6edac06da",
                            "desc": "My name is Matilda Laforest and this is my Aboriginal drawing. In my drawing I have included the seven sisters, the emu in the sky and animal tracks. In my drawing I included lots of blending the colours together and using lots of texture. I had a wonderful time😊"
                          },
                          {
                            "title": "Monique O, Year 4",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/0d60a51ee71b4ae2903e1ad1792ffda9",
                            "desc": "Hi, my name is Monique Orton, and this is my artwork. I used the Seven Sisters and the Emu in the Sky. I tried to use galaxy colors and earthy colours. I think that my painting uses a good contrast of colours and sort of looks like an Aboriginal painting."
                          },
                          {
                            "title": "Ollie G, Year 4",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/996f4ec4708449b7b4c3aab6e0398695",
                            "desc": "My artwork is about the seven sisters and the man chasing them in the shape of the Emu. I did it because it tells us about the Aboriginal Australian's Astrology beliefs. My name is Ollie Green, and this is my artwork."
                          },
                          {
                            "title": "Saskia N, Year 4",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/e6aedcbe1ab643219cab5f197dcb9c92",
                            "desc": "My artwork includes the seven sisters which is a story Aboriginal Australians used. I also did a rainbow dot circle which is the type of artwork that aboriginal people use. The last bit is another dot painting I found and I added some thing to make it stand out."
                          },
                          {
                            "title": "Scarlett C, Year 4",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/135cd77592ee4c26b091a7afd9d53e19",
                            "desc": "My artwork is inspired by the emu in the sky and the seven sisters. These are important to the Aboriginal Australian people because they use them for many purposes.\n The story of the seven sisters is about a man who wanted to marry one of the sisters so they ran away from the man. By Scarlett Callaghan."
                          },
                          {
                            "title": "Sophie D, Year 4",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/16737493087e4b1eb539b541cdafcaf1",
                            "desc": "My name is Sophie Dash, and this is my artwork. For my artwork I wanted to include some information about the seven sisters and the emu in the sky. I included the Emu in the sky and the seven sisters in my artwork because I wanted both different stories and paintings in one."
                          },
                          {
                            "title": "Zoe P, Year 4",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/68c8d4d9f4e94ca59948d5768e13878f",
                            "desc": "I painted a picture of the seven sisters. The story is that there is this man who wants one of the sisters for his wife, so he chases them, so the sisters run away from him. The seven sisters jump up into the sky and at night you can see them in the sky.\n By Zoe Poelchow"
                          },
                          {
                            "title": "Angel, 5R",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/2a61038959b042298fef8060fc273fe5",
                            "desc": "I originally made this particular art showing the indigenous people a safe path. They sky is dark to tell the night so the people know where to sleep and that their sleeping place is safe."
                          },
                          {
                            "title": "Ashton, 5R",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/209f6508ccd34963aab19fd565ecf2d1",
                            "desc": "An aboriginal man has thrown his boomerang into the sky after being told not to, so the sky kept his boomerang."
                          },
                          {
                            "title": "Blake, 5R",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/8ae3c30af9fc4aa9a847c8ab5bfb61fe",
                            "desc": "The Snake\n The reason why I did a snake is because it symbolises a creative life force and the person who's near the snake has made a home inside a cave."
                          },
                          {
                            "title": "Chaise, 5R",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/61f552596ed54aa7a272256551037acf",
                            "desc": "I chose black because it was the colour of the night sky. The star constellation Lupus is a picture of a cat of some kind."
                          },
                          {
                            "title": "Charlie, 5R",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/dcc4c72081e84ae99087727a77af1d2c",
                            "desc": "My artwork is of a kangaroo facing north."
                          },
                          {
                            "title": "Clayton, 5R",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/c92bec2f9bfc4927ac16670516824522",
                            "desc": "I chose the barramundi because it was one of the things that Aboriginals loved and ate a lot of. It was a big part of the Aboriginal culture and something that they used for many different things."
                          },
                          {
                            "title": "Delanie, 5R",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/970117d9d81147c2800f60968643967f",
                            "desc": "This is an Aboriginal art creation of a Sulphur-Crested Cockatoo in the galaxy. I used oil pastels for the whole piece of art except a little bit of pencil for the outline of the cockatoo."
                          },
                          {
                            "title": "Elli-May, 5R",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/eab6910071894d0e85f065d7928cf10f",
                            "desc": "My art has different symbols on it. It has the camp fire, smoke and scars. It has black purple, light purple and pink. I chose these shades because they remind me of a sunset. I hope you enjoy my art. Thank you."
                          },
                          {
                            "title": "Emily, 5R",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/978b541655d94aa1b609f4903b682e9a",
                            "desc": "The reason I chose the colours I used is because I thought they suited the theme that I was going for. I used aboriginal signs to show male and female and people sitting at the campfire because it was a aboriginal theme."
                          },
                          {
                            "title": "Emily, 5R",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/0f52ed17118940e1941a823f0f3024a8",
                            "desc": "The reason I chose the colours I used is because I thought they suited the theme that I was going for. I used aboriginal signs to show male and female and people sitting at the campfire because it was a aboriginal theme."
                          },
                          {
                            "title": "Henry, 5R",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/306cd37d59544fffbf22e90dee64fbbc",
                            "desc": "My art is a bass constellation. I used white and black oil pastels to make the night sky and stars/outline. I chose the bass because it was a locally sourced fish the aboriginals would have eaten."
                          },
                          {
                            "title": "Hunter, 5R",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/4dac4bec8e4744289e29ec5fec8de922",
                            "desc": "My art is meant to represent a marlin swimming through the stars spreading happiness and shedding light through the universe as it stands out among the stars as it's blue colour glides through the sea of stars."
                          },
                          {
                            "title": "Izzy, 5R",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/8318ba8e71d8492b8b4b37490608ac65",
                            "desc": "This is an Aboriginal Artwork that I made which represents a koala hanging from a tree branch. My artwork also shows a lake with the reflection in it of the mountains which have snow ove4r them. I did the background with colours that would be in an Aurora Borealis."
                          },
                          {
                            "title": "Jackson C, 5R",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/1452267d51bc4bfd86a85b571149e14b",
                            "desc": "I chose a lizard for my art in the sky because there are a lot of lizards in Australia."
                          },
                          {
                            "title": "Jackson W, 5R",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/8a7e37b66ecd4b45bfc8cbb6d96f71fe",
                            "desc": "My art is a reflection of the dock that the aboriginal people used for catching fish. I chose a wombat because it’s a Australian animal that needs protection from animals and the aboriginal people used to hunt the wombat and standed out for my artwork."
                          },
                          {
                            "title": "Kilarni, 5R",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/45e5008ee8b74f9381e327935981146e",
                            "desc": "The animal I chose was a platypus. In the sky I did black with rainbow smudges everywhere to represent the galaxy. I used a paddle pop stick to scratch out a moon, a river and emu footprints."
                          },
                          {
                            "title": "Lilly, 5R",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/07660f0d901641fa9e0e95a48f357524",
                            "desc": "For starters the scorpion constellation represents strength and intelligence, as you can see the silhouette trees are to show the shadows off the sunset, the colours are there to represent the sun setting. The sunset colours are to represent different stages of life."
                          },
                          {
                            "title": "Macie, 5R",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/e78f277d9f2648aea8a2bc594c3b7696",
                            "desc": "My artwork is about a kangaroo, a river and two men trying to get the kangaroo. The reason I blended the colours for the sky is because I was trying to make a galaxy effect and I also used Aboriginal signs to make it interesting."
                          },
                          {
                            "title": "Maddison, 5R",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/97637fb4eafc42a09ec2fe6b4d00eddb",
                            "desc": "A man is looking for some kangaroos to know if he is going the right direction. The kangaroo's mouth is facing west so he know knows he needs to go away from the kangaroo. I think I could have had a better sky."
                          },
                          {
                            "title": "Molly, 5R",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/4b1b0ac07fd34904a822453c7132f48d",
                            "desc": "I have chosen a wolf howling because when a wolf howls it means the wolf is trying to find the pack. My art is called lone wolf because in my art the wolf is howling to find a pack to belong to."
                          },
                          {
                            "title": "Taya, 5R",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/2eefef2f10de42b3bb9946a4ba795f3c",
                            "desc": "My artwork is a night sky. A lone aboriginal man stares at the constellation that is shaped like a wombat. I drew a tree with a kookaburra sitting in it to add some detail. I added grass detail to the ground."
                          },
                          {
                            "title": "Zali, 5R",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/2a093947d9624ac488587c3f67800864",
                            "desc": "My artwork is about a man that has been out fishing all day. He caught many fish but they were too small. He was about to go home but then his rod went off. When he got it in it was a huge fish."
                          },
                          {
                            "title": "Aidan, year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/e48fcf293948435f841b8311b1cb268d",
                            "desc": "I was inspired by the seven sisters. I used pencil and lots of paint. I used splat art and circles and wavy lines."
                          },
                          {
                            "title": "Aiden, 5/6D",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/2269c3dfcd504e21ac11dd185c0669fc",
                            "desc": "I have used the emu eggs in the sky because of all of its patterns and colours fore my art work. I have used two different kinds of patterns, splats and dots. I have used acrylic paint."
                          },
                          {
                            "title": "Blake, year 6",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/829da6b69c544c629799c7125cecc61b",
                            "desc": "My art work includes a big turtle and around the turtle are the seven sisters with fingers pointing. There are people sitting around the camp fire."
                          },
                          {
                            "title": "Ella, year 6",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/da46bbe28d8e465080e7c100fb4b6c9c",
                            "desc": "My artwork is the 7 sisters and I have used purple, blue and white for the for my background and the yellow for the 7 sisters"
                          },
                          {
                            "title": "Ella, year 6",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/3e84e0ab50294733ae101af70d092d0f",
                            "desc": "My artwork is the 7 sisters and I have used the colours: purple, blue and white for the stars and black for the background, and yellow for the seven sisters. I have used dots as the stars, and up and down strokes for the background."
                          },
                          {
                            "title": "Emily I, year 6",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/80ef02e4c1344b7ba6e8367c93f80d1c",
                            "desc": "My art symbolises the 7 sisters, with specks of white as stars. The large white and blue dots symbolise they are the seven sisters. The purple and black represented the Milky Way"
                          },
                          {
                            "title": "Emma, year 6",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/b9f5bfb0146a4a55915ed36d931010e1",
                            "desc": "I made my art work about the seven sisters. The symbols I included are circles, and the colours I included are black, white, purple and yellow."
                          },
                          {
                            "title": "Mitchell, Year 6",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/43a6720160c94184a4190b11ad830853",
                            "desc": "The emu is flying through the night sky through the Milky Way. The emu in the sky represents the season when the emu eggs are around, in breeding season."
                          },
                          {
                            "title": "Ruby, year 5",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/d69279e4961140b5a14ab19eee84e33d",
                            "desc": "My artwork is inspired by the 7 sisters. The symbols I used are circles, stars and dots"
                          },
                          {
                            "title": "Amelia S, 3B",
                            "img": "https://az659834.vo.msecnd.net/eventsairaueprod/production-icmsaust-public/27109d6c7e3b45f88f26cd87242905f0",
                            "desc": "I chose the Seven Sisters because I have five Friends, two sister and one brother. I used sticks and cotton buds. I love looking at the stars because they make me a wonder of what it was like back in aboriginal time and what it would have been like.\n This is my own work.\n Amelia S. 3B"
                          }
                        ];
                        let compiledHtml = ``;
                            compiledHtml = submissions.map((sub, index) =>
                                `
                                <a href="#submission-${index}" data-toggle="modal" target="_blank" class="col-12 col-sm-4 col-md-2 archive-item">
                                  <div class="archive-image">
                                    <img src="${sub.img}?text=${sub.title}" class="img-fluid" width="100%">
                                  </div>
                                  <div class="archive-title">
                                      ${sub.title}
                                  </div>
                                </a>
                                <div class="submission-popups">
                                  <div class="modal fade" id="submission-${index}">
                                    <div class="modal-dialog modal-dialog-centered">
                                      <div class="modal-content">
                                        <!-- modal content -->
                                        <div class="row p-0 m-0">
                                          <div class="col-md p-0 m-0">
                                            <img src="${sub.img}" class="img-fluid">
                                          </div>
                                          <div class="col-md-3 p-5 m-0 d-flex align-items-center">
                                            <div>
                                              <a type="button" class="close" data-dismiss="modal">&times;</a>
                                              <span class="pop-title">${sub.title}</span>
                                              <p class="pop-description">${sub.desc}</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- end modal content -->
                                    </div>
                                  </div>
                                </div>
                                `
                            ).join(``);
                        document.getElementById('submissions').innerHTML = compiledHtml;
                      </script>

                      <?php
                      include('include/cospark-footer.php');
                      ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- content -->

<?php
include('include/footer.php');
?>
