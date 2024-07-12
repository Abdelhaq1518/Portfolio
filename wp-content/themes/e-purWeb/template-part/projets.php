<?php
/*
Template Name: Projets
*/

get_header();
?>

<section class="projets">
    <div class="container">

        <?php
        // Arguments de la requête pour récupérer les projets
        $args = array(
            'post_type' => 'projets', // Nom du Custom Post Type
            'posts_per_page' => -1, // Récupère tous les projets
            'orderby' => 'date', // Trier par date (optionnel)
            'order' => 'DESC', // Trier par ordre descendant (optionnel)
        );

        $query = new WP_Query($args);

        if ($query->have_posts()):
            while ($query->have_posts()):
                $query->the_post();

                // Récupérer les champs ACF pour chaque projet
                $photo_url = get_field('photo'); // Champ ACF pour l'image
                $description = get_field('description'); // Champ ACF pour la description
                $nom = get_the_title(); // Titre du projet (nom)
                $annee = get_field('annee'); // Champ ACF pour l'année
                $competences = get_field('competences_acquises'); // Champ ACF pour les compétences acquises
                $github_url = get_field('Github_Link'); // Champ ACF pour le lien GitHub
        
                // HTML pour afficher chaque projet
                ?>
                <div class="projet">
                    <img src="<?php echo esc_url($photo_url); ?>" alt="<?php echo esc_attr($nom); ?>" class="image-projet" />

                    <h2><?php echo esc_html($nom); ?></h2>
                    <p><?php echo esc_html($description); ?></p>
                    <p>Année : <?php echo esc_html($annee); ?></p>
                    <p>Compétences acquises : <?php echo wp_kses_post($competences); ?></p>
                    <?php if ($github_url): ?>
                        <a href="<?php echo esc_url($github_url); ?>" target="_blank" class="github-link">
                            <i class="fab fa-github"></i> Voir sur GitHub
                        </a>
                    <?php endif; ?>
                </div>
                <?php
            endwhile;
            wp_reset_postdata(); // Réinitialiser la requête
        else:
            echo '<p>Aucun projet trouvé.</p>';
        endif;
        ?>
    </div>
</section>

<?php get_footer(); ?>