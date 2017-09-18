<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert(
            array(
                [
                    'title' => 'The Canterbury Tales',
                    'description' => 'Written in the 14th century, this collection of tales brought to life characters and stories that remain popular today. The Canterbury Tales also provides a glimpse into the customs and practices within the society at the time of its writing. This work is one of the most read books and one of the most studied in all the world. Many scholars suggest that Chaucer’s magnum opus contributed greatly to the popularization of the English vernacular in literature.',
                    'image' => 'http://placehold.it/120x180/'
                ],
                [
                    'title' => 'Divine Comedy',
                    'description' => 'Considered one of the most important pieces of world literature, the Divine Comedy is an epic poem that details a journey through the realms of the afterlife and, allegorically, the soul’s discovery of God. Long considered to be the greatest piece of Italian literature, the Divine Comedy also provides us with a closer view of medieval Christian theology and philosophy.',
                    'image' => 'http://placehold.it/120x180/'
                ],
                [
                    'title' => 'The Complete Works',
                    'description' => 'William Shakespeare is often considered the greatest writer in the English language and the greatest dramatist in all of history. The characters, stories, and language have taken hold of readers for hundreds of years and have greatly contributed to shaping modern culture. Shakespeare’s complete works have been translated into every major language and are still enjoyed around the world.',
                    'image' => 'http://placehold.it/120x180/'
                ],
                [
                    'title' => 'Moby Dick',
                    'description' => 'This now-famous book about a man’s hunt for the great whale is considered one of the greatest American novels ever written. Moby Dick is heavy on symbolism, but is also famous for the detailing of the whaling industry in the 19th century and its many different narrative styles and structures.',
                    'image' => 'http://placehold.it/120x180/'
                ],
                [
                    'title' => '1984',
                    'description' => 'This dystopian novel describes life in a totalitarian regime that has stripped the people of their rights. The themes in this novel have become a major part of modern culture, creating terms and concepts that have been incorporated into our own society. Surveillance, truth, and censorship take center stage in this novel; no other book has contributed to our understanding of these themes like 1984.',
                    'image' => 'http://placehold.it/120x180/'
                ],
                [
                    'title' => 'Brave New World',
                    'description' => 'Another dystopian novel, this one by Huxley is often considered one of the great novels of the 20th century. Huxley’s novel looked unfavorably on the loss of an individual’s identity through futuristic technological advancements. Huxley’s own fears of commerciality and the emerging youth culture are fully on display in this novel.',
                    'image' => 'http://placehold.it/120x180/'
                ],
                [
                    'title' => 'The Iliad and The Odyssey',
                    'description' => 'These two ancient Greek epic poems are not only the preeminent works in ancient Greek literature, but they are also incredibly influential texts for all forms of art, thought, and music in Western civilization. The Iliad details a few weeks during the end of the Trojan War and the Odyssey describes Odysseus’ ten-year journey home from the Trojan War. These two works are important for their detail of Greek history and legend, the composition of story, and the development of themes.',
                    'image' => 'http://placehold.it/120x180/'
                ],
                [
                    'title' => 'Don Quixote',
                    'description' => 'This Spanish novel, originally published as two books, is one of the most influential and popular novels in the world. It’s also considered to be one of the best books ever written. The adventure, symbolism, and characterization contained in Don Quixote has promoted the book to the incredible popularity it has today. Don Quixote became one of the earliest canonical texts and has been inspiring artists of all kinds for hundreds of years.',
                    'image' => 'http://placehold.it/120x180/'
                ],
                [
                    'title' => 'In Search of Lost Time',
                    'description' => ' Daunting in length, the seven-volume In Search of Lost Time is one of the most prominent modern works of the early 20th century. The novel explores themes of memory, childhood, and meaning, but it avoids the plot-driven model of 19th-century novels. The supporting cast are incredibly well drawn and the events are moved forward by the differing perspectives that experience them, writing techniques that have been emulated endlessly since the novel’s publication.',
                    'image' => 'http://placehold.it/120x180/'
                ],
                [
                    'title' => 'Madame Bovary',
                    'description' => 'Flaubert’s story of a woman who engages in adulterous affairs in an attempt to escape from a loveless marriage was subjected to heavy censorship at the time it was published, and Flaubert was taken to trial over the novel. After his acquittal, Madame Bovary became renowned as a masterpiece of the Realism movement.',
                    'image' => 'http://placehold.it/120x180/'
                ]
            )
        );

    }
}
