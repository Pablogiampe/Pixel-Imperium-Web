<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            //1
            [
                'Nombre' => 'Super Mario Bros',
                'Descripcion' => ' Mario rescata a la princesa Peach de Bowser en el Reino Champiñón, navegando a 
                través de niveles de plataformas llenos de enemigos y obstáculos.',
                'Precio' => 9.99,
                'Imagen' => 'assets/img/spm.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            //2
            [
                'Nombre' => 'The Legend of Zelda',
                'Descripcion' => 'Link emprende una aventura épica para rescatar a la princesa Zelda 
                y derrotar al malvado Ganon, explorando mazmorras y resolviendo acertijos.',
                'Precio' => 12.99,
                'Imagen' => 'assets/img/zeldart.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            //3
            [
                'Nombre' => 'Pac-Man',
                'Descripcion' => ' Controla a Pac-Man mientras come puntos en un laberinto y 
                evita a los fantasmas Blinky, Pinky, Inky y Clyde en este clásico juego de arcade.',
                'Precio' => 7.99,
                'Imagen' => 'assets/img/pcman.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            //4
            [
                'Nombre' => 'Donkey Kong',
                'Descripcion' => 'Mario debe rescatar a Pauline de Donkey Kong, 
                escalando estructuras y esquivando barriles y otros peligros en niveles de plataformas.',
                'Precio' => 11.99,
                'Imagen' => 'assets/img/kong.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            //5
            [
                'Nombre' => 'Metroid',
                'Descripcion' => 'La cazarrecompensas Samus Aran explora el planeta Zebes para derrotar a los 
                piratas espaciales y destruir la amenaza de Mother Brain.',
                'Precio' => 8.99,
                'Imagen' => 'assets/img/metroid.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            //6
            [
                'Nombre' => 'Sonic the Hedgehog',
                'Descripcion' => 'Sonic, el erizo azul, corre a gran velocidad a través de niveles 
                coloridos para detener al malvado Dr. Robotnik y liberar a los animales capturados.',
                'Precio' => 10.99,
                'Imagen' => 'assets/img/sonic.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            //7
            [
                'Nombre' => 'Mega Man 2',
                'Descripcion' => ' Mega Man lucha contra ocho Robot Masters, cada uno con 
                habilidades únicas, para derrotar al malvado Dr. Wily en este juego de acción y plataformas.',
                'Precio' => 9.49,
                'Imagen' => 'assets/img/megaman.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            //8
            [
                'Nombre' => 'Street Fighter II',
                'Descripcion' => 'Juego de lucha donde los jugadores eligen entre diversos 
                personajes con movimientos únicos para competir en combates de uno contra uno.',
                'Precio' => 13.99,
                'Imagen' => 'assets/img/street.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            //9
            [
                'Nombre' => 'Final Fantasy VII',
                'Descripcion' => ' Cloud Strife y su grupo luchan contra la corporación Shinra y 
                el villano Sephiroth en este RPG con una narrativa profunda y personajes memorables.',
                'Precio' => 14.99,
                'Imagen' => 'assets/img/fn.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            //10
            [
                'Nombre' => 'The Legend of Zelda: A Link to the Past',
                'Descripcion' => 'Link viaja entre los mundos de Hyrule y el Mundo Oscuro 
                para derrotar a Ganon y rescatar a la princesa Zelda.',
                'Precio' => 15.99                ,
                'Imagen' => 'assets/img/zelda3.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            //11
            [
                'Nombre' => 'Tetris',
                'Descripcion' => 'Juego de rompecabezas donde encajas bloques de diferentes formas 
                que caen para completar líneas y evitar que la pantalla se llene.',
                'Precio' => 6.99,
                'Imagen' => 'assets/img/tetris.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            //12
            [
                'Nombre' => 'Castlevania',
                'Descripcion' => 'Simon Belmont, armado con su látigo, recorre el castillo 
                de Drácula enfrentando monstruos y jefes en su misión de derrotar al vampiro.',
                'Precio' => 11.49,
                'Imagen' => 'assets/img/Castlevania.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            //13
            [
                'Nombre' => 'Chrono Trigger',
                'Descripcion' => 'RPG de viajes en el tiempo donde Crono y sus amigos intentan 
                salvar el mundo, con múltiples finales y una historia envolvente.',
                'Precio' => 14.49,
                'Imagen' => 'assets/img/chrono.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            //14
            [
                'Nombre' => 'Contra',
                'Descripcion' => 'Juego de disparos de acción donde dos soldados luchan contra una invasión 
                alienígena a través de niveles llenos de enemigos y obstáculos.',
                'Precio' => 10.49,
                'Imagen' => 'assets/img/contra.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            //15
            [
                'Nombre' => 'GoldenEye 007',
                'Descripcion' => ' Basado en la película de James Bond, este juego de disparos en primera 
                persona permite a los jugadores completar misiones y enfrentar enemigos.',
                'Precio' => 12.49,
                'Imagen' => 'assets/img/golden.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            //16
            [
                'Nombre' => 'The Legend of Zelda: Breath of the Wild',
                'Descripcion' => 'Link explora un vasto mundo abierto, 
                resolviendo acertijos y combatiendo enemigos para derrotar a Calamity Ganon y salvar Hyrule.',
                'Precio' => 59.99,
                'Imagen' => 'assets/img/zelda4.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            //17
            [
                'Nombre' => 'The Witcher 3: Wild Hunt',
                'Descripcion' => 'Geralt de Rivia, un cazador de monstruos, 
                busca a su hija adoptiva Ciri en un mundo lleno de intrigas, criaturas y decisiones morales.',
                'Precio' => 29.99,
                'Imagen' => 'assets/img/twwh.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            //18
            [
                'Nombre' => 'Red Dead Redemption 2',
                'Descripcion' => 'Arthur Morgan y la pandilla Van der Linde luchan por sobrevivir 
                en el Viejo Oeste mientras enfrentan la decadencia y las consecuencias de sus actos.',
                'Precio' => 39.99,
                'Imagen' => 'assets/img/rdr.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            //19
            [
                'Nombre' => 'God of War',
                'Descripcion' => 'Kratos y su hijo Atreus se embarcan en una peligrosa aventura en 
                la mitología nórdica, enfrentando dioses y monstruos en un viaje de redención.',
                'Precio' => 34.99,
                'Imagen' => 'assets/img/gof.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            //20
            [
                'Nombre' => 'Horizon Zero Dawn',
                'Descripcion' => 'Aloy, una cazadora en un futuro post-apocalíptico, 
                descubre los secretos del mundo dominado por máquinas mientras lucha por su supervivencia.',
                'Precio' => 29.99,
                'Imagen' => 'assets/img/horizon.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            //21
            [
                'Nombre' => 'Sekiro: Shadows Die Twice',
                'Descripcion' => 'En el Japón feudal, un 
                guerrero shinobi busca venganza y enfrenta a poderosos enemigos y jefes en un juego de acción desafiante.',
                'Precio' => 49.99,
                'Imagen' => 'assets/img/sekiro.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            //22
            [
                'Nombre' => 'Cyberpunk 2077',
                'Descripcion' => 'En un futuro distópico, el mercenario V navega por 
                la ciudad de Night City, completando misiones y mejorando sus habilidades cibernéticas.',
                'Precio' => 44.99,
                'Imagen' => 'assets/img/cyberpunk.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            //23
            [
                'Nombre' => 'Ghost of Tsushima',
                'Descripcion' => ' Jin Sakai lucha contra la 
                invasión mongola en la isla de Tsushima, combinando sigilo y combate samurái en un mundo abierto.',
                'Precio' => 39.99,
                'Imagen' => 'assets/img/ghost.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            //24
            [
                'Nombre' => 'Elden Ring',
                'Descripcion' => 'Un vasto mundo de fantasía creado por FromSoftware y George R.R. Martin, 
                donde los jugadores enfrentan desafíos y descubren secretos.',
                'Precio' => 59.99,
                'Imagen' => 'assets/img/elden.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            //25
            [
                'Nombre' => 'Final Fantasy VII Remake',
                'Descripcion' => 'Reimaginación del clásico RPG con gráficos modernos, 
                combates en tiempo real y una historia expandida que sigue a Cloud y su grupo.',
                'Precio' => 49.99,
                'Imagen' => 'assets/img/final.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            //26
            [
                'Nombre' => 'Spider-Man: Miles Morales',
                'Descripcion' => 'Miles Morales protege Nueva York como el nuevo Spider-Man, 
                enfrentando villanos y descubriendo sus propios poderes únicos.',
                'Precio' => 39.99,
                'Imagen' => 'assets/img/spider.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            //27
            [
                'Nombre' => 'Hades',
                'Descripcion' => 'Zagreus, hijo de Hades, intenta escapar del inframundo, 
                enfrentando a enemigos y dioses en este juego de acción roguelike con narrativa profunda.',
                'Precio' => 24.99,
                'Imagen' => 'assets/img/hades.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            //28
            [
                'Nombre' => 'Death Stranding',
                'Descripcion' => 'Sam Bridges entrega paquetes en un mundo post-apocalíptico, 
                conectando comunidades aisladas y enfrentando amenazas sobrenaturales',
                'Precio' => 39.99,
                'Imagen' => 'assets/img/death.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            //29
            [
                'Nombre' => 'Doom Eternal',
                'Descripcion' => 'El Doom Slayer lucha contra hordas de demonios en un frenético 
                juego de disparos en primera persona, con armas y combates intensos.',
                'Precio' => 29.99,
                'Imagen' => 'assets/img/doom.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            //30
            [
                'Nombre' => 'Resident Evil Village',
                'Descripcion' => 'Ethan Winters explora una oscura aldea en busca de su hija secuestrada, 
                enfrentando horrores y criaturas en este juego de terror y supervivencia',
                'Precio' => 39.99,
                'Imagen' => 'assets/img/re.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            //31
            [
                'Nombre' => 'Assassins Creed Valhalla',
                'Descripcion' => 'Eivor, un vikingo, lidera invasiones en Inglaterra, construye asentamientos 
                y explora un vasto mundo en esta entrega de la saga de acción y aventura.',
                'Precio' => 49.99,
                'Imagen' => 'assets/img/assasins.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            //32
            [
                'Nombre' => 'Genshin Impact',
                'Descripcion' => 'Juego de rol de acción en un mundo abierto donde los jugadores exploran el mundo de Teyvat, 
                reúnen personajes y enfrentan desafíos mágicos y de combate.',
                'Precio' => 0.00,
                'Imagen' => 'assets/img/genshin.jpeg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            //33
            [
                'Nombre' => 'Fortnite',
                'Descripcion' => 'Juego de batalla real donde los jugadores compiten para ser el último en pie en una isla. Construcción y combates rápidos son las claves para la victoria.',
                'Precio' => 0.00,
                'Imagen' => 'assets/img/fornite.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            //34
            [
                'Nombre' => 'Stardew Valley',
                'Descripcion' => 'Simulador de granja y vida rural donde los jugadores cultivan, crían animales, exploran minas y forman relaciones con los aldeanos.',
                'Precio' => 14.99,
                'Imagen' => 'assets/img/star.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            //35
            [
                'Nombre' => 'Among Us',
                'Descripcion' => 'Juego de deducción social en el que los jugadores deben completar tareas en una nave espacial mientras intentan descubrir a los impostores entre ellos.',
                'Precio' => 4.99,
                'Imagen' => 'assets/img/amg.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            //36
            [
                'Nombre' => 'Minecraft',
                'Descripcion' => 'Juego de construcción y aventuras en un mundo abierto de bloques. Los jugadores pueden explorar, recolectar recursos, crear estructuras y luchar contra criaturas.',
                'Precio' => 26.95,
                'Imagen' => 'assets/img/minecraft.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
            // Agrega más productos aquí según sea necesario
        ]);
    }
}
