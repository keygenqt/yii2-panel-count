<?php
/*
 * Copyright 2020 Vitaliy Zarubin
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/** @var keygenqt\panelCount\PanelCount $widget */

?>

<div class="yii2-panel-count panel-<?= $widget->color ?>">
    <table>
        <tr> 
            <td <?php if (!$widget->icon): ?>style="display: none;"<?php endif; ?> class="icon" rowspan="2">
                <i class="<?= $widget->icon ?>"></i>
            </td>
            <td class="text">
                &nbsp;
                <div class="text-block">
                    <?= $widget->title ?>
                </div>
            </td>
        </tr>
        <tr> 
            <td class="count">
                <div class="block-count">
                    <?php if ($widget->up === true): ?>
                        <i class="fa fa-caret-up"></i>
                    <?php elseif ($widget->up === false): ?>
                        <i class="fa fa-caret-down"></i>
                    <?php endif; ?>
                    <div class="counter" style="display: inline-block;" id="<?= $widget->id ?>">
                        0
                    </div>
                </div>
            </td>
        </tr>
   </table>
</div>

<script type="text/javascript">
    <?php if ($widget->format): ?>
        <?= $widget->format ?>
        
    <?php endif; ?>
    $(function(){
        var $count = $('#<?= $widget->id ?>'),
            count = parseInt('<?= $widget->count ?>'),
            html = '<?= $widget->count ?>'.replace(/[\d]+/, '');
    
        $('#<?= $widget->id ?>').animate({
            'z-index' : parseInt('<?= $widget->count ?>')
        }, {
            duration: <?= $widget->duration ?>,
            progress: function(obj, index) {
                var count = parseInt('<?= $widget->count ?>');
                $(this).html(parseInt(count * index));
            },
            start: function() {$(this).html(0);},
            complete: function() {
                <?php if ($widget->format): ?>
                    var total = parseInt('<?= $widget->count ?>');
                    $(this).html(panelCountFormat(total + html, '.') + '<?= $widget->symbol ?>');
                <?php else: ?>
                    $(this).html('<?= $widget->count . $widget->symbol ?>');
                <?php endif; ?>
            }
        });
    });
</script>