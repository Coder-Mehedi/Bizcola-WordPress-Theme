<?php 
// Team Member Section

$team_member_section_title = get_field('team_member_section_title', 'option');
$team_member_section_description = get_field('team_member_section_description', 'option');
$team_member_section_button = get_field('team_member_section_button', 'option');


if( have_rows('team_members_section','option') ): 
    while( have_rows('team_members_section','option') ): the_row();
        
        $members[] = [
        'photo' => $members_photo[] = get_sub_field('member_photo'),
        'name' => $members_names[] = get_sub_field('member_name'),
        'job' => $member_job_fields[] = get_sub_field('member_job_field'),

        'fb' => $members_facebook_profile_link[] = get_sub_field('member_facebook_profile_link'),
        'twitter' => $members_twitter_profile_link[] = get_sub_field('member_twitter_profile_link'),
        'google-plus' => $members_google_plus_profile_link[] = get_sub_field('member_google_plus_profile_link'),
        'website' => $member_website[] = get_sub_field('member_website')
    ];

    endwhile;
endif;
?>

<!-- ============= Team Area Start =========== -->
<section class="team-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-heading team-heading">
                    <h2 class=" wow fadeInDown"><?php echo $team_member_section_title ? $team_member_section_title : ''; ?></h2>
                    <p class=" wow fadeInUp"><?php echo $team_member_section_description ? $team_member_section_description : ''; ?></p>
                    <a class="theme-btn mt-30  wow fadeInRight" href="<?php echo $team_member_section_button['url'] ? $team_member_section_button['url'] : '#'; ?>"><?php echo $team_member_section_button['title'] ? $team_member_section_button['title'] : ''; ?></a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row">
        <?php foreach($members as $member): ?>

                    <div class="col-md-6 wow fadeInRight">
                        <div class="single-team">
                            <div class="img-hidden">
                                <img src="<?php echo $member['photo']['url'] ? $member['photo']['url'] : ''; ?>" alt="team">
                            </div>
                            <div class="team-content">
                                <h3><?php echo $member['name'] ? $member['name'] : ''; ?></h3>
                                <p><?php echo $member['job'] ? $member['job'] : ''; ?></p>
                                <div class="team-social">
                                    <ul>
                                        <li><a href="<?php echo $member['fb'] ? $member['fb'] : '#'; ?>"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="<?php echo $member['twitter'] ? $member['twitter'] : '#'; ?>"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="<?php echo $member['google-plus'] ? $member['google-plus'] : '#'; ?>"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="<?php echo $member['website'] ? $member['website'] : '#'; ?>"><i class="fas fa-globe"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

        <?php endforeach; ?>
                    

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============= Team Area End =========== -->