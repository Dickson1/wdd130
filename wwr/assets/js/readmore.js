$.fn.showHideParagraph = function(settings){
        var config = $.extend({},  $.fn.showHideParagraph.config, settings);
        $(this).on({click: function () {
            var $this = $(this);
            if ($this.hasClass('less')) {
                $this.removeClass('less').html(config.moreText);
            } else {
                $this.addClass('less').html(config.lessText);
            }

            $this.parent().siblings('p:not(:first)').animate({opacity: 'toggle', height: 'toggle'});
            return false;
        }
        }, '.morePLink');

        return this.each(function () {
            var $this = $(this);
            if($this.hasClass("shortenedP")) return;

            $this.addClass("shortenedP");
            var paragraphs = $this.children('p');
            if (paragraphs.length > config.paragraphShowed) {
                paragraphs.not(":first").hide();
               // paragraphs.first().css({margin:'0px'});
                paragraphs.first().append(" ...");
                var moreLess = '<span><a href="#" class="morePLink">'  + config.moreText + '</a></span>';
                $this.append(moreLess);
            }
        });
    };

    $.fn.showHideParagraph.config = {
        paragraphShowed: 1,
        ellipsesText: "...",
        moreText: 'Show more...',
        lessText: 'Show less...'
    };
