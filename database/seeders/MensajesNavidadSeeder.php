<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Companero;
use App\Models\Mensaje;

class MensajesNavidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['Cesar Alberto de Leon Ramirez', '¡Feliz Navidad, Cesar! Espero que pases unas excelentes fiestas junto a los tuyos. ¡Un abrazo!'],
            ['Henry Alexander Mendez Madrid', '¡Feliz Navidad, Henry! Que este tiempo sea de mucha alegría para vos, tu esposa y tu bebé. ¡A ver cuándo sale otra partida de Clash Royale!'],
            ['Cristian Estuardo de Leon Ramirez', '¡Feliz Navidad, Cristian! Gracias por ser un compañero tan relajado y trabajador. Que disfrutés mucho el descanso.'],
            ['Selvin Omar Perez Jacinto', '¡Feliz Navidad, Selvin! Mis mejores deseos para vos y tu familia. Que tengan unas fiestas muy bendecidas.'],
            ['Alexander Estuardo Guevara Solis', '¡Feliz Navidad, "Bufalito"! Que pasés unas fiestas de mucha risa y alegría. Gracias por el buen ambiente de siempre.'],
            ['Edwin Osvaldo Felipe Perez', 'Feliz Navidad, Edwin. Le deseo lo mejor en estas fiestas y agradezco su profesionalismo en el área de seguridad.'],
            ['Elmer Arnulfo Pineda de Leon', 'Feliz Navidad, Don Elmer. Que pase un tiempo tranquilo y feliz rodeado de su esposa e hijos.'],
            ['Raul Perez', '¡Feliz Navidad, Raul! Espero que pases unas fiestas muy alegres. Gracias por tu amabilidad en RRHH.'],
            ['Claudia Francisca Godoy Aguirre', '¡Feliz Navidad, Claudia! Que siga contagiándonos con su alegría. ¡Un abrazo, colocha!'],
            ['Jessica Leonela Archila Sagastume', '¡Feliz Navidad, Jessica! Bienvenida al equipo, espero que pase unas fiestas maravillosas en tu primer año con nosotros.'],
            ['Ada Fabiola Ventura Cruz', '¡Feliz Navidad, Ada Fabiola! Que grato ha sido conocerla, es una excelente compañera y linda persona, se le aprecia mucho. Le deseo lo mejor en estas fiestas y muchas bendiciones (no de las que lloran). Si adquiero nueva información, se la haré saber, o ¡No!. Un abrazo.'],
            ['Zenner Oliver Morales Carpio', '¡Feliz Navidad, "Amiguito"! Se te aprecia. Disfrutá mucho estas fiestas junto a tu familia y amigos.'],
            ['Jose Antonio Valdez Diaz', 'Feliz Navidad, "Estimado". Que Dios lo bendiga mucho a ud y a su familia en estas fiestas.'],
            ['Pedro Luis Lopez Mateo', '¡Feliz Navidad, Pedro! Gracias por compartir tus conocimientos y los enlace de Clash Royal. Sos un excelente compañero.'],
            ['Edvin Estuardo Vasquez Romero', 'Feliz Navidad, Edvin. Le deseo unas fiestas llenas de paz y alegría junto a su familia.'],
            ['Humberto Carlyone Izaguirre', '¡Feliz Navidad, Humberto! Gracias por ser un buen compañero. ¡Un abrazo!'],
            ['Carlos Sabino Ortiz Gomez', '¡Feliz Navidad, Sapino! Que te la pases muy bien a tu familia recientemente crecida, bendiciones, te deseo lo mejor.'],
            ['Gabriela Lourdes Son Puy', 'Feliz Navidad, Gabriela. Le deseo unas fiestas muy felices y un próspero año nuevo. Relax, ya se irá de vacaciones.'],
            ['Sergio Esahu Salguero Gonzalez', 'Feliz Navidad, Sergio. Un gusto trabajar con vos. Que pases unas excelentes fiestas con tu esposa e hijo, muchas benciones amigo.'],
            ['Jennifer Eunice Dardon', '¡Feliz Navidad, Jennifer! Que su sonrisa siga iluminando la oficina. Mis mejores deseos para ud y su family.'],
            ['Jorge Alexander Palma', '¡Feliz Navidad, George! Un gusto compartir con vos las labores diarias, son un excelente compañero. ¡Que disfrutés mucho! (Pero disminuir o aumentar la población)'],
            ['Luis Guillermo Saldivar Ruiz', '¡Feliz Navidad, Luis! Gracias por tu buena onda y alegría de siempre. ¡Pasala de lo mejor!'],
            ['Edin Eduardo Garcia Felipe', 'Feliz Navidad, Edin. Espero que pases un excelente tiempo de descanso y celebración junto a tu familia y amigos.'],
            ['Edgar Eduardo Castañeda Reyes', 'Feliz Navidad, Edgar. Te deseo lo mejor en estas fiestas y un gran inicio de año.'],
            ['Carlos Ernesto Leon Boche', '¡Feliz Navidad, Carlos! Qué bueno que te integraste bien al equipo. Seguí siendo un buen compañero ¡Que pasés una bonitas fiestas!'],
            ['Natividad de Jesus Chacon Corado', '¡Feliz Navidad, Natividad! Gracias por ser un buen compañero, pasate la bien en estas fiestas. Mis mejores deseos para vos y tu familia.'],
            ['Gustavo Ivan Guzman Orellana', 'Feliz Navidad, Gustavo. Aunque no me caigas tan bien, te deseo unas fiestas llenas de alegría.'],
            ['Cristian Omar Murillo Sandoval', '¡Feliz Navidad, Cristian! Sos un gran amigo y un ejemplo de trabajador. Mis mejores deseos para vos y tu esposa.'],
            ['Melanie Jazmin Espinoza', '¡Feliz Navidad, Melanie! Bienvenida, espero que pase unas fiestas increíbles con su familia y amigos. Espero el otro año hable más.'],
            ['Sergio Melendez', 'Feliz Navidad, Sergio. Te deseo lo mejor en estas fiestas decembrinas.'],
            ['Elver Omar Salguero Aguilar', 'Feliz Navidad, Elver. Que pase un tiempo de mucha paz y alegría con tu familia y amigos.'],
            ['Rafael Altamirano', 'Feliz Navidad, Ing. Altamirano. Le deseo lo mejor en estas fiestas y un exitoso año nuevo. Muchas bendiciones para ud y su familia.'],
            ['Angelica Lucia Colindres Mejia', 'Feliz Navidad, Ing. Angelica. Gracias por su gestión en RRHH. Que pase unas fiestas maravillosas junto a su familia. Muchas bendiciones.'],
            ['Perlita Waleska de Leon', 'Feliz Navidad, Perlita. Le deseo mucha felicidad en estas fiestas junto a su familia. Muchas bendiciones.'],
            ['Cesar Luis Chavez Mujo', 'Feliz Navidad, Ing. Cesar. Un gusto trabajar en armonía con su departamento. Que pase un excelente fin de año y muchas bendiciones en su matrimonio.'],
            ['Oscar Abdel Orrego Duarte', 'Feliz Navidad, Oscar. Te deseo un tiempo de mucho descanso y alegría en familia.'],
            ['Otto Emilio Gomez Mendoza', 'Feliz Navidad, Otto. Que pase unas fiestas excelentes, muchas bendiciones a ud y su familia.'],
            ['Oseas Benedicto Gonzalez Genis', 'Feliz Navidad, Oseas. Te deseo lo mejor para este cierre de año. Muchas bendiciones.'],
            ['Gerson Eduardo Gomez Herrera', 'Feliz Navidad, Gerson. Le deseo que pase unas fiestas muy amenas, buen cierre de año. Y muchos exitos también en el próximo.'],
            ['Gerson Isai Xiloj Guerra', 'Feliz Navidad, Xiloj. Le deseo que la pase muy bien en estas fiestas junto a su familia. Muchas bendiciones y desde ya excelente año nuevo.'],
            ['Luis Fernando Chigua Vasquez', '¡Feliz Navidad, Chigua! Pasa una buenas fiestas, muchas bendiciones joven. Nota: maneja con precaución.'],
            ['Zabdiel Eduardo Escalante Larios', 'Feliz Navidad, Zabdiel. Te deseo lo mejor para vos y tu familia en estas fechas.'],
            ['Oliverio Cruz Hernandez', '¡Feliz Navidad, Oliverio! Un gusto compartir laboralmente con vos. Muchas bendiciones para vos y tu familia. ¡Que disfrutés mucho!'],
            ['Wendy Vanesa Aceituno Vasquez', '¡Feliz Navidad, Wendy! Que su alegría nunca falte. Mis mejores deseos para ud y su linda familia. ¡Qué la pase muy bien!'],
            ['Rudy Abel Morataya', 'Feliz Navidad, Lic. Rudy. Le deseo lo mejor en estas fiestas. Gracias por su liderazgo en el Solidarismo, muchas benciones para ud y su familia.'],
            ['Gustavo Adolfo Valdez Diaz', '¡Feliz Navidad, Gustavo! Un gusto saludarte, espero que pases unas excelentes fiestas con tu familia.'],
            ['Jakeline Elizabeth Molina Ramos', '¡Feliz Navidad, Jakeline! Aunque a veces la enoje Pancho y remate con Tavo, igual se le aprecia mucho. ¡Disfrute las fiestas!'],
            ['Axel Anibal Perez Jacinto', '¡Feliz Navidad, "Joven"! Que pasés un tiempo increíble con tu familia. Muchas bendiciones y mis mejores deseos para el siguiente año.'],
            ['Teresita', '¡Feliz Navidad, Teresita! Muchas gracias por cuidar tanto de mi oficina y por ser tan especial. Le deseo que pase una bonitas fiestas junto a su familia. Muchas bendiciones.'],
            ['Gecely Fabiola Pinto Figueroa', '¡Feliz Navidad, Gecely! La verdad no encontraba las palabras para este mensaje, pero dejeme decirle que la aprecio mucho. Le deseo de corazón lo mejor para su vida, pase una felices fiestas junto a su familia y amigos. Y desde ya un éxito año nuevo, y será un placer seguir conviviendo con ud.'],
            ['Katherin Suseth Castro García', '¡Feliz Navidad, Katherin! Ha sido un placer compartir en todos estos años. Desde ya le deseo unas felices fiestas, pasela bien. Muchas bendiciones para ud y su familia. Y espero podamos seguir conviviendo el próximo año, con la misma armonía.'],
            ['Katherin Alejandra Cruz Lira', '¡Feliz Navidad, Katy! Ha sido un placer convivir vos en estos casi 5 años, se te aprecia mucho. Te deseo lo mejor en tu ya etapa de madre, ya quiero ver las fotos de Sophia el próximo año. Muchas bendiciones para vos y Kevin, tengan unas felices fiestas.'],
            ['Merclin Isaac López', '¡Feliz Navidad, Parcero! Ha sido un placer trabajar en equipo con su departamento. Mis más sinceros deseos para ud y su familia, pasenla bien. Desde ya un éxitoso 2026.'],
            ['Hubertt Josue Requena Felipe', '¡Feliz Navidad, Hubertt! Es un gusto tener un compañero como tu persona. Deseo que pases unas muy felices fiestas, ¡Disfrutalas! Y será muy grato compartir el siguiente año con vos en el departamento.'],
            ['Francisco Jose Avila Galeano', '¡Feliz Navidad, Pancho! Sos un excelente compañero, el más chambeador de los 3, ha sido un placer contar con tu apoyo en el departamento. Espero que te la pases de lo mejor con los tuyos en estas fiestas, descansa y un própero año nuevo.'],
            ['Jefferson Isaac Lorenzo Caceros', '¡Feliz Navidad, Joven! Ha sido un placer trabajar en equipo con vos estos 7 años y cacho. Has sido un excelente compañero y ahora un buen jefe, me alegra su crecimiento, seguí así. Te deseo que pases unas felices fiestas junto a tu familia. Y desde ya un excelente 2026. ¡Pasala bien!'],
            ['Jose Roberto Montenegro', '¡Feliz Navidad, Ing. Jose Montenegro! Deseo expresar mis felicitaciones por su excelente gestión y liderazgo a lo largo de este y años anteriores, es una persona ejemplar y admirable por su largo trayecto laboral. Que estas fiestas sean motivo de alegría y unión para usted y su familia. Mis mejores deseos para el año que comienza.'],
            ['Luis Fernando Lopez Estrada', '¡Feliz Navidad, Ing. Luis! Tardemente, pero lo felicito por el crecimiento que ha tenido en la empresa. Cuente con el apoyo de T.I., y será un gusto trabajar coordinamente con ud. Le deseo muchos éxitos y muchas bendiciones. ¡Disfrute esta fiestas decembrinas!'],
        ];

        foreach ($data as [$nombre, $mensajeTexto]) {
            $companero = Companero::create([
                'nombre_completo' => $nombre
            ]);

            Mensaje::create([
                'companero_id' => $companero->id,
                'mensaje' => $mensajeTexto
            ]);
        }
    }
}
